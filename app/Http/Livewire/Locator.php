<?php

namespace App\Http\Livewire;

use Livewire\Component;
use Spatie\Geocoder\Geocoder;
use Illuminate\Support\Facades\Http;
use SKAgarwal\GoogleApi\PlacesApi;

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

        $results = $geocoder->getCoordinatesForAddress('valencia Venezuela');


        dd($results);
        $res = array_filter(data_get($results, 'address_components'), function ($arr) {
            /* dd($arr); */
            return data_get($arr, 'types.0') === 'locality';
        });

        dd(data_get($res, '0.long_name'));
    }

    public function search2()
    {
        $client = new PlacesApi(config('geocoder.key'));
        $response = $client->placeAutocomplete('valencia', [
            'types' => '(regions)'
        ]);
        dd($response);
    }

    public function search3()
    {
        $client = new \GuzzleHttp\Client();
        $geocoder = new Geocoder($client);
        $geocoder->setApiKey(config('geocoder.key'));

        $results = $geocoder->getCoordinatesForAddress('valencia Venezuela');


        dd($results);
        $res = array_filter(data_get($results, 'address_components'), function ($arr) {
            /* dd($arr); */
            return data_get($arr, 'types.0') === 'locality';
        });

        dd(data_get($res, '0.long_name'));
    }
    public function render()
    {
        //$url = 'https://www.googleapis.com/geolocation/v1/geolocate?key=';
        //$api_key = env('GOOGLE_API_KEY');
        return view('livewire.locator');
    }
}
