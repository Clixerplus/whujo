<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;
use Illuminate\Support\Str;
use Spatie\Geocoder\Geocoder;
use SKAgarwal\GoogleApi\PlacesApi;
use Adrianorosa\GeoLocation\GeoLocation;

class SearchLocation extends Component
{
    public $search;

    public $active = false;

    public $results = null;

    protected $places;

    public $location;

    public function selectLocation($index)
    {
        $this->search = $this->results[$index]['description'];

        dd($this->results[$index]['terms']);

        $this->results = null;
    }

    public function updatedSearch()
    {
        if (Str::length($this->search) > 4) {
            $this->obtainAutocompleteOptions(app()->make(PlacesApi::class));
        }
    }


    public function render()
    {
        $this->location= GeoLocation::lookup('186.185.203.147')->getCity() ?? request()->ip();

        return view('livewire.search-location');
    }

    protected function obtainAutocompleteOptions(PlacesApi $places)
    {
        $response = $places->queryAutocomplete($this->search);
        $this->results = $response['predictions'];

    }
}
