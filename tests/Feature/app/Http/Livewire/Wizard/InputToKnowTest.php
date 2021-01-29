<?php

namespace Tests\Feature\app\http\livewire\wizard;

use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Experience;
use Illuminate\Support\Str;
use App\Http\Livewire\Wizard\InputToKnow;
use Tests\Feature\MockClass\ProductModelTest;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InputToKnowTest extends TestCase
{
    use RefreshDatabase;

    /** @test  */
    function it_set_incoming_model()
    {
        $model = new ProductModelTest;
        $model->toKnow = 'Text to Know';

        Livewire::test(InputToKnow::class, ['model' => $model])
            ->assertSet('product', $model)
            ->assertSet('product.toKnow', $model->toKnow);
    }

    /** @test  */
    function it_toKnow_length_less_than_maximum_allowed()
    {
        Livewire::test(InputToKnow::class, ['model' => new ProductModelTest])
            ->set('product.toKnow', Str::random(InputToKnow::MAX_TEXT_LENGTH + 1))
            ->call('validateData')
            ->assertHasErrors(['product.toKnow' => 'max']);
    }

    /** @test  */
    function it_toKnow_save_on_experience_model()
    {
        $experience = Experience::factory()->create()
            ->first(['id', 'toKnow']);
        $newtoKnow = Str::random(InputToKnow::MAX_TEXT_LENGTH);

        Livewire::test(InputToKnow::class, ['model' => $experience])
            ->set('product.toKnow', $newtoKnow)
            ->call('save')
            ->assertHasNoErrors('product.toKnow');

        $this->assertDatabaseHas(
            'experiences',
            [
                'id' => $experience->id,
                'toKnow' => $newtoKnow
            ]
        );
    }

    /** @test  */
    function it_has_view_with_required_elements()
    {
        Livewire::test(InputToKnow::class, ['model' => new ProductModelTest])
            ->assertSeeHtml('wire:model.debounce.500ms="product.toKnow"')
            ->assertViewHas('max_length');
    }

    /** @test */
    function it_listen_for_step_change_request_is_validates_it()
    {
        $experience = Experience::factory()->create();

        Livewire::test(InputToKnow::class, ['model' => $experience])
            ->emit('canChangeStep')
            ->assertEmitted('dataIsValid', true);
    }
}
