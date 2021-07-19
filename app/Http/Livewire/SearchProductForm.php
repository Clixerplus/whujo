<?php

namespace App\Http\Livewire;


use Livewire\Component;
use Spatie\Geocoder\Geocoder;
use App\Models\Tag as TagModel;


class SearchProductForm extends Component
{
    public int $activeType  = 0;
    public string $search   = '';
    public string $location = '';
    public string $category = '';

    public function render()
    {
        return view('livewire.search-product-form', [
            'tags' => $this->getResults(),
            'categories' => $this->getCategories(),
            'locations' => $this->getLocations(),
            'model' => $this->getModel()
        ]);
    }

    private function getResults()
    {
        $model = $this->getModel();
        return !empty($this->search)
            ? TagModel::search($this->search, $model)
            : collect();
    }
    private function getCategories()
    {
        $model = $this->getModel();
        return \App\Models\Category::where('product_type', $model)->get();
    }
    private function getModel()
    {
        return [
            \App\Models\Service::class,
            \App\Models\Experience::class,
            \App\Models\ShareACoffee::class
        ][$this->activeType];
    }
    private function getLocations()
    {
        $locations = [];

        if ($this->location) {
            $client = new \GuzzleHttp\Client();
            $geocoder = new Geocoder($client);
            $geocoder->setApiKey(config('geocoder.key'));
            $results = $geocoder->getAllCoordinatesForAddress($this->location);

            foreach ($results as $result) {
                $locations[] = [
                    "address"  => data_get($result, 'formatted_address'),
                    "locality" => $this->getAreaName($result, 'locality'),
                    "state"    => $this->getAreaName($result, 'administrative_area_level_1'),
                    "country"  => $this->getAreaName($result, 'country'),
                ];
            }
        }
        return $locations;
    }

    private function getAreaName($array, $key)
    {
        $result = array_filter(data_get($array, 'address_components'), function ($arr) use ($key) {
            return data_get($arr, 'types.0') === $key;
        });

        return data_get($result, '0.long_name');
    }

    public function changeType(int $type)
    {
        $this->activeType = $type;
    }
}
