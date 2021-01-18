<?php

namespace Tests\Feature\app\Http\Livewire\Wizard;

use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Service;
use Illuminate\Support\Str;
use Tests\Feature\MockClass\ProductModelTest;
use App\Http\Livewire\Wizard\InputMicroservices;
use App\Models\Microservice;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InputMicroservicesTest extends TestCase
{
    use RefreshDatabase;

    /** @test  */
    function it_set_incoming_model()
    {
        Service::factory()->create();
        $service = Service::first(['id', 'features']);

        Livewire::test(InputMicroservices::class, ['service' => $service])
            ->assertSet('service', $service);
    }

    /** @test  */
    function it_feature_has_no_error_whit_a_valid_entry()
    {
        Service::factory()->create();
        Livewire::test(InputMicroservices::class, [
            'service' => Service::first(['id', 'features'])
        ])
            ->set('name', Str::random(InputMicroservices::MIN_NAME_LENGHT))
            ->set('description', Str::random(InputMicroservices::MIN_DESCRIPTION_LENGHT))
            ->set('price', InputMicroservices::MINIMUM_PRICE)
            ->call('addMicroserviceToList')
            ->assertHasNoErrors();
    }

    /** @test  */
    function it_name_is_required()
    {
        Service::factory()->create();
        Livewire::test(InputMicroservices::class, [
            'service' => Service::first(['id', 'features'])
        ])
            ->set('name', '')
            ->call('addMicroserviceToList')
            ->assertHasErrors(['name' => 'required']);
    }

    /** @test  */
    function it_name_cannot_be_less_than_the_minimum_allowed()
    {
        Service::factory()->create();
        Livewire::test(InputMicroservices::class, [
            'service' => Service::first(['id', 'features'])
        ])
            ->set('name', Str::random(InputMicroservices::MIN_NAME_LENGHT - 1))
            ->call('addMicroserviceToList')
            ->assertHasErrors(['name' => 'between']);
    }

    /** @test  */
    function it_name_cannot_be_greater_than_the_maximum_allowed()
    {
        Service::factory()->create();
        Livewire::test(InputMicroservices::class, [
            'service' => Service::first(['id', 'features'])
        ])
            ->set('name', Str::random(InputMicroservices::MAX_NAME_LENGHT + 1))
            ->call('addMicroserviceToList')
            ->assertHasErrors(['name' => 'between']);
    }

    /** @test  */
    function it_description_is_required()
    {
        Service::factory()->create();
        Livewire::test(InputMicroservices::class, [
            'service' => Service::first(['id', 'features'])
        ])
            ->set('description', '')
            ->call('addMicroserviceToList')
            ->assertHasErrors(['description' => 'required']);
    }

    /** @test  */
    function it_description_cannot_be_less_than_the_minimum_allowed()
    {
        Service::factory()->create();
        Livewire::test(InputMicroservices::class, [
            'service' => Service::first(['id', 'features'])
        ])
            ->set('description', Str::random(InputMicroservices::MIN_DESCRIPTION_LENGHT - 1))
            ->call('addMicroserviceToList')
            ->assertHasErrors(['description' => 'between']);
    }

    /** @test  */
    function it_description_cannot_be_greater_than_the_maximum_allowed()
    {
        Service::factory()->create();
        Livewire::test(InputMicroservices::class, [
            'service' => Service::first(['id', 'features'])
        ])
            ->set('description', Str::random(InputMicroservices::MAX_DESCRIPTION_LENGHT + 1))
            ->call('addMicroserviceToList')
            ->assertHasErrors(['description' => 'between']);
    }

    /** @test  */
    function it_price_is_required()
    {
        Service::factory()->create();
        Livewire::test(InputMicroservices::class, [
            'service' => Service::first(['id', 'features'])
        ])
            ->set('price', '')
            ->call('addMicroserviceToList')
            ->assertHasErrors(['price' => 'required']);
    }

    /** @test  */
    function it_price_must_be_numeric()
    {
        Service::factory()->create();
        Livewire::test(InputMicroservices::class, [
            'service' => Service::first(['id', 'features'])
        ])
            ->set('price', '499d')
            ->call('addMicroserviceToList')
            ->assertHasErrors(['price' => 'numeric']);
    }

    /** @test  */
    function it_price_is_greater_than_minimum_allowed()
    {
        Service::factory()->create();
        Livewire::test(InputMicroservices::class, [
            'service' => Service::first(['id', 'features'])
        ])
            ->set('price', InputMicroservices::MINIMUM_PRICE - 1)
            ->call('addMicroserviceToList')
            ->assertHasErrors(['price' => 'min']);
    }

    /** @test  */
    function it_microservices_addMicroserviceToList_on_service_model()
    {
        Service::factory()->create(['features' => []]);
        $service = Service::first(['id', 'features']);
        $microservice = Microservice::factory()->make([
            'name' => Str::random(InputMicroservices::MIN_NAME_LENGHT),
            'description' => Str::random(InputMicroservices::MIN_DESCRIPTION_LENGHT),
            'price' => InputMicroservices::MINIMUM_PRICE,
        ]);

        Livewire::test(InputMicroservices::class, ['service' => $service])
            ->set('name', $microservice->name)
            ->set('description', $microservice->description)
            ->set('price', $microservice->price)
            ->call('addMicroserviceToList');

        $this->assertDatabaseHas(
            'microservices',
            [
                'service_id' => $service->id,
                'name' => $microservice->name,
                'description' => $microservice->description,
                'price' => $microservice->price
            ]
        );
    }

    /** @test */
    function it_microservice_properties_are_resets_after_insert()
    {
        Service::factory()->create();
        $microservice = Microservice::factory()->make([
            'name' => Str::random(InputMicroservices::MIN_NAME_LENGHT),
            'description' => Str::random(InputMicroservices::MIN_DESCRIPTION_LENGHT),
            'price' => InputMicroservices::MINIMUM_PRICE,
        ]);

        Livewire::test(InputMicroservices::class, [
            'service' => Service::first(['id', 'features'])
        ])
            ->set('name', $microservice->name)
            ->set('description', $microservice->description)
            ->set('price', $microservice->price)
            ->call('addMicroserviceToList')
            ->assertSet('name', '')
            ->assertSet('description', '')
            ->assertSet('price', '');
    }

    /** @test  */
    function it_have_a_view_with_required_elements()
    {
        Service::factory()->create();

        Livewire::test(InputMicroservices::class, [
            'model' => Service::first(['id', 'features'])
        ])
            ->assertSeeHtml('name="name"')
            ->assertSeeHtml('wire:model.debounce.500ms="name"')
            ->assertSeeHtml('name="description"')
            ->assertSeeHtml('wire:model.debounce.500ms="description"')
            ->assertSeeHtml('name="price"')
            ->assertSeeHtml('wire:model.debounce.500ms="price"');
    }
}
