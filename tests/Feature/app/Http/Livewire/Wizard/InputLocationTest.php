<?php

namespace Tests\Feature\app\Http\Livewire\Wizard;

use Tests\TestCase;
use App\Models\City;
use App\Models\State;
use Livewire\Livewire;
use App\Models\Service;
use App\Models\Locality;
use App\Http\Livewire\Wizard\InputLocation;
use App\Models\Experience;
use Tests\Feature\MockClass\ProductModelTest;
use Illuminate\Foundation\Testing\RefreshDatabase;

class InputLocationTest extends TestCase
{
    use RefreshDatabase;

    /** @test */
    function it_set_data_on_mount()
    {
        $model = $this->prepareModelForTest();

        Livewire::test(InputLocation::class, ['model' => $model])
            ->assertSet('product', $model)
            ->assertSet('selectedState', $model->state_id)
            ->assertSet('selectedCity', $model->city_id)
            ->assertSet('selectedLocality', $model->locality_id);
    }

    /** @test */
    function it_has_no_errors_when_input_is_valid()
    {
        $model = $this->prepareModelForTest();

        Livewire::test(InputLocation::class, ['model' => new ProductModelTest])
            ->set('selectedState', $model->state_id)
            ->set('selectedCity', $model->city_id)
            ->set('selectedLocality', $model->locality_id)
            ->call('validateData')
            ->assertHasNoErrors();
    }

    /** @test */
    function it_selectedState_required()
    {
        Livewire::test(InputLocation::class, ['model' => new ProductModelTest])
            ->set('selectedState', '')
            ->call('validateData')
            ->assertHasErrors(['selectedState' => 'required']);
    }

    /** @test */
    function it_selectedState_must_exist_in_database()
    {
        Livewire::test(InputLocation::class, ['model' => new ProductModelTest])
            ->set('selectedState', 'State01')
            ->call('validateData')
            ->assertHasErrors(['selectedState' => 'exists']);
    }
    /** @test */
    function it_selectedCity_required()
    {
        Livewire::test(InputLocation::class, ['model' => new ProductModelTest])
            ->set('selectedCity', '')
            ->call('validateData')
            ->assertHasErrors(['selectedCity' => 'required']);
    }

    /** @test */
    function it_selectedCity_must_exist_in_database()
    {
        Livewire::test(InputLocation::class, ['model' => new ProductModelTest])
            ->set('selectedCity', 'City01')
            ->call('validateData')
            ->assertHasErrors(['selectedCity' => 'exists']);
    }
    /** @test */
    function it_selectedLocality_required()
    {
        Livewire::test(InputLocation::class, ['model' => new ProductModelTest])
            ->set('selectedLocality', '')
            ->call('validateData')
            ->assertHasErrors(['selectedLocality' => 'required']);
    }

    /** @test */
    function it_selectedLocality_must_exist_in_database()
    {
        Livewire::test(InputLocation::class, ['model' => new ProductModelTest])
            ->set('selectedState', 'State01')
            ->call('validateData')
            ->assertHasErrors(['selectedState' => 'exists']);
    }

    /** @test */
    function is_location_save_on_service_model()
    {
        $model = $this->prepareModelForTest();
        $service = Service::factory()->blank()->create();

        Livewire::test(InputLocation::class, ['model' => $service])
            ->set('selectedState', $model->state_id)
            ->set('selectedCity', $model->city_id)
            ->set('selectedLocality', $model->locality_id)
            ->call('save')
            ->assertHasNoErrors();

        $this->assertDatabaseHas('services', [
            'id' => $service->id,
            'state_id' => $model->state_id,
            'city_id' => $model->city_id,
            'locality_id' => $model->locality_id
        ]);
    }

    /** @test */
    function is_location_save_on_experience_model()
    {
        $model = $this->prepareModelForTest();
        $experience = Experience::factory()->blank()->create();

        Livewire::test(InputLocation::class, ['model' => $experience])
            ->set('selectedState', $model->state_id)
            ->set('selectedCity', $model->city_id)
            ->set('selectedLocality', $model->locality_id)
            ->call('save')
            ->assertHasNoErrors();

        $this->assertDatabaseHas('experiences', [
            'id' => $experience->id,
            'state_id' => $model->state_id,
            'city_id' => $model->city_id,
            'locality_id' => $model->locality_id
        ]);
    }

    /** @test */
    function it_show_cities_related_with_choosen_state()
    {
        State::factory(2)->has(City::factory()->has(locality::factory()))->create();
        $state = State::with('cities.localities')->first();

        Livewire::test(InputLocation::class, ['model' => new ProductModelTest])
            ->assertDontSeeHtml($state->cities->first()->name)
            ->assertDontSeeHtml($state->cities->first()->localities->first()->name)
            ->set('selectedState', $state->id)
            ->assertSeeHtml($state->cities->first()->name)
            ->assertDontSeeHtml($state->cities->first()->localities->first()->name)
            ->set('selectedCity', $state->cities->first()->id)
            ->assertSeeHtml($state->cities->first()->name)
            ->assertSeeHtml($state->cities->first()->localities->first()->name);
    }

    /** @test */
    function it_has_input_binding_in__view()
    {
        Livewire::test(InputLocation::class, ['model' => new ProductModelTest])
            ->assertSeeHtml('wire:model="selectedState"')
            ->assertSeeHtml('wire:model="selectedCity"')
            ->assertSeeHtml('wire:model="selectedLocality"');
    }

    /** @test */
    function it_have_collections_to_choose_from()
    {
        Livewire::test(InputLocation::class, ['model' => new ProductModelTest])
            ->assertSet('states', State::all())
            ->assertSet('cities', collect())
            ->assertSet('localities', collect());
    }

    /** @test */
    function it_show_localities_related_with_choosen_city()
    {
        State::factory(2)->has(City::factory()->has(locality::factory()))->create();
        $state = State::with('cities.localities')->first();

        Livewire::test(InputLocation::class, ['model' => new ProductModelTest])
            ->set('selectedState', $state->id)
            ->assertSet('cities', City::where('state_id', $state->id)->get())
            ->set('selectedCity', $state->cities->first()->id)
            ->assertSet('localities', Locality::where('city_id', $state->cities->first()->id)->get());
    }


    private function prepareModelForTest()
    {
        $model = new ProductModelTest;
        $model->state_id = State::factory()->create(['id' => 'S1'])->first()->id;
        $model->city_id  = City::factory()->related()->create(['id' => 'C1'])->first()->id;
        $model->locality_id = Locality::factory()->related()->create(['id' => 'L1'])->first()->id;

        return $model;
    }
}
