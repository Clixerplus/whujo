<?php

namespace Tests\Feature\App\Http\Livewire\Wizard;

use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Service;
use App\Models\Experience;
use Illuminate\Support\Str;
use Tests\Feature\MockClass\ProductModelTest;
use App\Http\Livewire\Wizard\InputDescription;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InputDescriptionTest extends TestCase
{
    use RefreshDatabase;

    /** @test  */
    function it_set_incoming_model()
    {
        $model = new ProductModelTest;
        $model->description = 'Description';

        Livewire::test(InputDescription::class, ['model' => $model])
            ->assertSet('product', $model)
            ->assertSet('product.description', $model->description);
    }

    /** @test  */
    function it_description_has_no_errors_with_valid_data()
    {
        Livewire::test(InputDescription::class, ['model' => new ProductModelTest])
            ->set('product.description', Str::random(InputDescription::MIN_CHARS + 1))
            ->call('validateData')
            ->assertHasNoErrors('product.description');
    }

    /** @test  */
    function it_description_is_required()
    {
        Livewire::test(InputDescription::class, ['model' => new ProductModelTest])
            ->set('product.description', '')
            ->call('validateData')
            ->assertHasErrors(['product.description' => 'required']);
    }

    /** @test  */
    function it_description_cannot_be_less_than_the_minimum_number_of_characters_allowed()
    {
        Livewire::test(InputDescription::class, ['model' => new ProductModelTest])
            ->set('product.description', Str::random(InputDescription::MIN_CHARS - 1))
            ->call('validateData')
            ->assertHasErrors(['product.description' => 'between']);
    }

    /** @test  */
    function it_description_cannot_be_greater_than_the_maximum_number_of_characters_allowed()
    {
        Livewire::test(InputDescription::class, ['model' => new ProductModelTest])
            ->set('product.description', Str::random(InputDescription::MAX_CHARS + 1))
            ->call('validateData')
            ->assertHasErrors(['product.description' => 'between']);
    }

    /** @test  */
    function it_description_can_be_save_on_service_model()
    {
        Service::factory()->create();
        $model = Service::first(['id', 'description']);
        $newDescription = Str::random(InputDescription::MIN_CHARS + 1);

        Livewire::test(InputDescription::class, ['model' => $model])
            ->set('product.description', $newDescription)
            ->call('save');

        $this->assertDatabaseHas(
            'services',
            [
                'id' => $model->id,
                'description' => $newDescription
            ]
        );
    }

    /** @test  */
    function it_description_can_be_save_on_experience_model()
    {
        Experience::factory()->create();
        $model = Experience::first(['id', 'description']);
        $newDescription = Str::random(InputDescription::MIN_CHARS + 1);

        Livewire::test(InputDescription::class, ['model' => $model])
            ->set('product.description', $newDescription)
            ->call('save');

        $this->assertDatabaseHas(
            'experiences',
            [
                'id' => $model->id,
                'description' => $newDescription
            ]
        );
    }

    /** @test  */
    function it_have_a_view_with_required_elements()
    {
        Livewire::test(InputDescription::class, ['model' => new ProductModelTest])
            ->assertSeeHtml('name="product.description"')
            ->assertSeeHtml('wire:model.debounce.500ms="product.description"');
    }

    /** @test */
    function it_listen_for_step_change_request_is_validates_it()
    {
        Livewire::test(InputDescription::class, ['model' => new ProductModelTest])
            ->set('product.description', Str::random(InputDescription::MIN_CHARS))
            ->emit('canChangeStep')
            ->assertEmitted('dataIsValid', true);
    }

    /** @test */
    function it_listen_for_step_change_request_and_rejects_it()
    {
        Livewire::test(InputDescription::class, ['model' => new ProductModelTest])
            ->emit('canChangeStep')
            ->assertNotEmitted('dataIsValid');
    }
}
