<?php

namespace App\Http\Livewire;


use Livewire\Component;
use Spatie\Geocoder\Geocoder;
use App\Models\Tag as TagModel;


class SearchProductForm extends Component
{
    public int $activeType  = 0;
    public string $search   = '';
    public string $searchLocation   = '';

    public array $location = [];
    public array $locations = [];
    public string $category = '';
    public string $type = '';


    public function render()
    {
        $this->getLocations();
        $this->getModel();

        return view('livewire.search-product-form', [
            'tags' => $this->getResults(),
            'categories' => $this->getCategories(),
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
        $this->type = [
            'service',
            'experience',
            'share-a-coffees'
        ][$this->activeType];

        return [
            \App\Models\Service::class,
            \App\Models\Experience::class,
            \App\Models\ShareACoffee::class
        ][$this->activeType];
    }
    private function getLocations()
    {
        $locations = [];

        if ($this->searchLocation) {
            $client = new \GuzzleHttp\Client();
            $geocoder = new Geocoder($client);
            $geocoder->setApiKey(config('geocoder.key'));
            $results = $geocoder->getAllCoordinatesForAddress($this->searchLocation);

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

    public function changeType(int $type)
    {
        $this->activeType = $type;
    }

    public function chooseLocation($index)
    {
        $this->location = $this->locations[$index];
        $this->searchLocation = $this->location['address'];
    }

    public function chooseResult($result)
    {
        $this->search = $result;
    }

    public function chooseCategory($category)
    {
        $this->category = $category;
    }
}
