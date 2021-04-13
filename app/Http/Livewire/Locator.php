<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Geocoder\Geocoder;
use Illuminate\Support\Facades\Http;

class Locator extends Component
{
    public function locate()
    {
        //
    }

    public function search()
    {

        $client = new \GuzzleHttp\Client();

        $geocoder = new Geocoder($client);

        $geocoder->setApiKey(config('geocoder.key'));

        $geocoder->setCountry(config('geocoder.country', 'US'));

        $results = $geocoder->getCoordinatesForAddress('Barqusimeto');

        dd($results);
    }
    public function render()
    {
        //$url = 'https://www.googleapis.com/geolocation/v1/geolocate?key=';
        //$api_key = env('GOOGLE_API_KEY');
        return view('livewire.locator');
    }
}
