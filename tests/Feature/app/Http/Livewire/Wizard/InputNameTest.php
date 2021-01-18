<?php

namespace Tests\Feature\app\Http\Livewire\Wizard;

use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Service;
use App\Models\Experience;
use Illuminate\Support\Str;
use App\Http\Livewire\Wizard\InputName;
use Tests\Feature\MockClass\ProductModelTest;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InputNameTest extends TestCase
{

    use RefreshDatabase;

    /** @test  */
    function it_set_incoming_model()
    {
        $model = new ProductModelTest;
        $model->name = 'Name';

        Livewire::test(InputName::class, ['model' => $model])
            ->assertSet('product', $model)
            ->assertSet('product.name', $model->name);
    }

    /** @test  */
    function it_name_has_no_errors_when_the_input_is_valid()
    {
        Livewire::test(InputName::class, ['model' => new ProductModelTest])
            ->set('product.name', Str::random(InputName::MIN_NAME_LENGTH))
            ->call('validateData')
            ->assertHasNoErrors();
    }

    /** @test  */
    function it_name_is_required()
    {
        Livewire::test(InputName::class, ['model' => new ProductModelTest])
            ->set('product.name', '')
            ->call('validateData')
            ->assertHasErrors(['product.name' => 'required']);
    }

    /** @test  */
    function it_name_must_have_a_minimun_chars()
    {
        Livewire::test(InputName::class, ['model' => new ProductModelTest])
            ->set('product.name', Str::random(InputName::MIN_NAME_LENGTH - 1))
            ->call('validateData')
            ->assertHasErrors(['product.name' => 'between']);
    }

    /** @test  */
    function it_name_must_have_a_maximum_chars()
    {
        Livewire::test(InputName::class, ['model' => new ProductModelTest])
            ->set('product.name', Str::random(InputName::MAX_NAME_LENGTH + 1))
            ->call('validateData')
            ->assertHasErrors(['product.name' => 'between']);
    }

    /** @test  */
    function it_name_save_on_service_model()
    {
        Service::factory()->create(['name' => "Service's Name"]);
        $service = Service::first(['id', 'name']);
        $newName = "Changed Named";

        Livewire::test(InputName::class, ['model' => $service])
            ->set('product.name', $newName)
            ->call('save')
            ->assertHasNoErrors('product.name');

        $this->assertDatabaseHas(
            'services',
            [
                'id' => $service->id,
                'name' => $newName
            ]
        );
    }

    /** @test  */
    function it_name_save_on_experience_model()
    {
        Experience::factory()->create(['name' => "Experience's Name"]);
        $experience = Experience::first(['id', 'name']);
        $newName = "Changed Name";

        Livewire::test(InputName::class, ['model' => $experience])
            ->set('product.name', $newName)
            ->call('save')
            ->assertHasNoErrors('product.name');

        $this->assertDatabaseHas(
            'experiences',
            [
                'id' => $experience->id,
                'name' => $newName
            ]
        );
    }

    /** @test  */
    function it_have_a_view_with_required_elements()
    {
        Livewire::test(InputName::class, ['model' => new ProductModelTest])
            ->assertSeeHtml('name="product.name"')
            ->assertSeeHtml('wire:model.debounce.500ms="product.name"');
    }
}
