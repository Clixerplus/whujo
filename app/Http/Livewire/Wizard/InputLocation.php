<?php

namespace App\Http\Livewire\Wizard;

use App\Models\City;
use App\Models\State;
use App\Models\Locality;
use Illuminate\Database\Eloquent\Model as ProductModel;
use App\Http\Livewire\AbstractComponents\StepBuilderWizard;

class InputLocation extends StepBuilderWizard
{
    protected $rules;

    public $states;
    public $cities;
    public $localities;

    public $selectedState = null;
    public $selectedCity = null;
    public $selectedLocality = null;

    public function mount(ProductModel $model)
    {
        parent::mount($model);

        $this->states = State::all();
        $this->cities = collect();
        $this->localities = collect();

        $this->selectedLocality = $model->locality_id;

        if (!is_null($this->selectedLocality)) {
            $locality = Locality::with('city.state')->find($this->selectedLocality);
            if ($locality) {
                $this->localities = Locality::where('city_id', $locality->city_id)->get();
                $this->cities = City::where('state_id', $locality->city->state_id)->get();
                $this->selectedState = $locality->city->state_id;
                $this->selectedCity = $locality->city_id;
            }
        }
    }
    public function updatedSelectedState($state)
    {
        $this->cities = City::where('state_id', $state)->get();
        $this->selectedCity = NULL;
    }

    public function updatedSelectedCity($city)
    {
        if (!is_null($city)) {
            $this->localities = Locality::where('city_id', $city)->get();
        }
    }

    protected function setValidationRules(): void
    {
        $this->rules = [
            'selectedState' => 'required|exists:states,id',
            'selectedCity' => 'required|exists:cities,id',
            'selectedLocality' => 'required|exists:localities,id'
        ];
    }

    public function save()
    {
        $this->validateData();

        $this->product->update([
            'state_id' => $this->selectedState,
            'city_id' => $this->selectedCity,
            'locality_id' => $this->selectedLocality
        ]);
    }



    public function render()
    {
        return view('livewire.wizard.input-location');
    }
}
