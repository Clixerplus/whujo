<?php

namespace Tests\Feature\App\Http\Livewire\Wizard;

use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Experience;
use App\Http\Livewire\Wizard\InputMinimumAge;
use Tests\Feature\MockClass\ProductModelTest;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InputMinimumAgeTest extends TestCase
{

    use RefreshDatabase;

    /** @test  */
    function it_set_incoming_model()
    {
        $model = new ProductModelTest;
        $model->minimumAge = InputMinimumAge::MINIMUM_AGE;

        Livewire::test(InputMinimumAge::class, ['model' => $model])
            ->assertSet('product', $model)
            ->assertSet('product.minimumAge', InputMinimumAge::MINIMUM_AGE);
    }

    /** @test  */
    function it_minimumAge_has_no_errors_with_a_valid_entry()
    {
        Livewire::test(InputMinimumAge::class, ['model' => new ProductModelTest])
            ->set('product.minimumAge', InputMinimumAge::MINIMUM_AGE)
            ->call('validateData')
            ->assertHasNoErrors();
    }

    /** @test  */
    function it_minimumAge_is_required()
    {
        Livewire::test(InputMinimumAge::class, ['model' => new ProductModelTest])
            ->set('product.minimumAge', null)
            ->call('validateData')
            ->assertHasErrors(['product.minimumAge' => 'required']);
    }

    /** @test  */
    function it_minimumAge_must_be_integer()
    {
        Livewire::test(InputMinimumAge::class, ['model' => new ProductModelTest])
            ->set('product.minimumAge', 2.5)
            ->call('validateData')
            ->assertHasErrors(['product.minimumAge' => 'integer']);
    }

    /** @test  */
    function it_minimumAge_must_be_between_a_valid_range()
    {
        Livewire::test(InputMinimumAge::class, ['model' => new ProductModelTest])
            ->set('product.minimumAge', InputMinimumAge::MINIMUM_AGE - 1)
            ->call('save')
            ->assertHasErrors(['product.minimumAge' => 'between'])
            ->set('product.minimumAge', InputMinimumAge::MAXIMUM_AGE + 1)
            ->call('save')
            ->assertHasErrors(['product.minimumAge' => 'between']);
    }

    /** @test  */
    function it_minimumAge_save_on_experience_model()
    {
        Experience::factory()->create(['minimumAge' => InputMinimumAge::MINIMUM_AGE]);
        $experience = Experience::first(['id', 'minimumAge']);
        $newMinimumAge = InputMinimumAge::MAXIMUM_AGE;

        Livewire::test(InputMinimumAge::class, ['model' => $experience])
            ->set('product.minimumAge', $newMinimumAge)
            ->call('save')
            ->assertHasNoErrors('product.minimumAge');

        $this->assertDatabaseHas(
            'experiences',
            [
                'id' => $experience->id,
                'minimumAge' => $newMinimumAge
            ]
        );
    }

    /** @test  */
    function it_have_a_view_with_required_elements()
    {
        Livewire::test(InputMinimumAge::class, ['model' => new ProductModelTest])
            ->assertSeeHtml('name="product.minimumAge"')
            ->assertSeeHtml('wire:model.debounce.500ms="product.minimumAge"');
    }

    /** @test */
    function it_listen_for_step_change_request_is_validates_it()
    {
        Livewire::test(InputMinimumAge::class, ['model' => new ProductModelTest])
            ->set('product.minimumAge', InputMinimumAge::MINIMUM_AGE)
            ->emit('canChangeStep')
            ->assertEmitted('dataIsValid', true);
    }

    /** @test */
    function it_listen_for_step_change_request_and_rejects_it()
    {
        Livewire::test(InputMinimumAge::class, ['model' => new ProductModelTest])
            ->emit('canChangeStep')
            ->assertNotEmitted('dataIsValid');
    }
}
