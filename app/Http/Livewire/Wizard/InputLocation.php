<?php

namespace App\Http\Livewire\Wizard;

use App\Models\City;
use App\Models\State;
use App\Models\Locality;
use Spatie\Geocoder\Geocoder;
use App\Http\Livewire\AbstractComponents\StepBuilderWizard;

class InputLocation extends StepBuilderWizard
{
    public $locations = [];
    public $search = '';

    public function render()
    {
        $this->searchUpdate();
        return view('livewire.wizard.input-location');
    }



    protected function setValidationRules(): void
    {
        //
    }

    public function rules()
    {
        return ['search' => 'nullable'];
    }

    public function searchUpdate()
    {
        $locations = [];
        if (strlen($this->search) > 3) {
            $client = new \GuzzleHttp\Client();
            $geocoder = new Geocoder($client);
            $geocoder->setApiKey(config('geocoder.key'));
            $results = $geocoder->getAllCoordinatesForAddress($this->search);

            foreach ($results as $result) {
                $address_arr = [];
                $locality = $this->getAreaName($result, 'locality');
                $state    = $this->getAreaName($result, 'administrative_area_level_1');
                $country  = $this->getAreaName($result, 'country');

                if (!is_null($locality)) {
                    $address_arr[] = $locality;
                }
                if (!is_null($state)) {
                    $address_arr[] = $state;
                }
                if (!is_null($locality)) {
                    $address_arr[] = $country;
                }

                $locations[] = [
                    "address" => implode(", ", $address_arr),
                    "locality" => $locality,
                    "state"    => $state,
                    "country"  => $country,
                ];
            }
        }

        $this->locations = $locations;
    }

    private function getAreaName($array, $key)
    {
        $result = array_filter(data_get($array, 'address_components'), function ($arr) use ($key) {
            return data_get($arr, 'types.0') === $key;
        });

        if (count($result))
            return data_get($result, '*.long_name')[0];

        return null;
    }

    public function chooseLocation($index)
    {
        $this->search = $this->locations[$index]['address'];
    }
}
