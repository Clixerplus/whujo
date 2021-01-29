<?php

namespace Tests\Feature\app\Http\Livewire\Wizard;

use Tests\TestCase;
use Livewire\Livewire;
use App\Models\Service;
use Illuminate\Support\Str;
use App\Http\Livewire\Wizard\InputFeatures;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InputFeaturesTest extends TestCase
{
    use RefreshDatabase;

    /** @test  */
    function it_set_incoming_model()
    {
        Service::factory()->create(['features' => ['Feature']]);
        $service = Service::first(['id', 'features']);

        Livewire::test(InputFeatures::class, ['service' => $service])
            ->assertSet('service', $service)
            ->assertSet('service.features', $service->features);
    }

    /** @test */
    function it_add_feature_into_the_features_property()
    {
        Service::factory()->create(['features' => ['Feature1']]);
        $service = Service::first(['id', 'features']);

        Livewire::test(InputFeatures::class, ['service' => $service])
            ->set('feature', 'Feature2')
            ->call('addFeatureToList')
            ->assertSet('service.features', ['Feature1', 'Feature2']);
    }

    /** @test  */
    function it_feature_is_required()
    {
        Service::factory()->create(['features' => []]);
        $service = Service::first(['id', 'features']);

        Livewire::test(InputFeatures::class, ['service' => $service])
            ->set('feature', '')
            ->call('addFeatureToList')
            ->assertHasErrors(['feature' => 'required'])
            ->assertSet('service.features', []);
    }

    /** @test  */
    function it_feature_must_be_a_string()
    {
        Service::factory()->create(['features' => []]);
        $service = Service::first();

        Livewire::test(InputFeatures::class, ['service' => $service])
            ->set('feature', ['feature'])
            ->call('addFeatureToList')
            ->assertHasErrors(['feature' => 'string'])
            ->assertSet('service.features', []);
    }

    /** @test  */
    function it_feature_cannot_be_less_than_the_minimum_number_of_characters_allowed()
    {
        Service::factory()->create(['features' => []]);
        $service = Service::first();

        Livewire::test(InputFeatures::class, ['service' => $service])
            ->set('feature', Str::random(InputFeatures::MINIMUM_CHARS - 1))
            ->call('addFeatureToList')
            ->assertHasErrors(['feature' => 'min'])
            ->assertSet('service.features', []);
    }

    /** @test  */
    function it_remove_a_feature_from_the_list()
    {
        Service::factory()->create([
            'features' => ['Feature1', 'Feature2']
        ]);

        Livewire::test(InputFeatures::class, ['service' => Service::first()])
            ->assertSet('service.features', ['Feature1', 'Feature2'])
            ->call('removeFeatureFromList', 0)
            ->assertSet('service.features', [1 => 'Feature2']);
    }

    /** @test  */
    function it_have_a_view_with_required_elements()
    {
        Service::factory()->create([
            'features' => ['Feature1', 'Feature2']
        ]);

        Livewire::test(InputFeatures::class, ['service' => Service::first()])
            ->assertViewHas('features')
            ->assertSeeHtml('name="feature"')
            ->assertSeeHtml('wire:model.debounce.500ms="feature"')
            ->assertSeeHtml('wire:click="addFeatureToList"')
            ->assertSeeHtml('wire:click="removeFeatureFromList(0)"')
            ->assertSeeHtml('wire:click="removeFeatureFromList(1)"')
            ->assertSeeHtml('Feature1')
            ->assertSeeHtml('Feature2');
    }

    /** @test */
    function it_listen_for_step_change_request_is_validates_it()
    {
        Service::factory()->create(['features' => ['Feature']]);
        $service = Service::first(['id', 'features']);

        Livewire::test(InputFeatures::class, ['service' => $service])
            ->emit('canChangeStep')
            ->assertEmitted('dataIsValid', true);
    }
}
