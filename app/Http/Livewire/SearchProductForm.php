<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use App\Models\Service;
use Livewire\Component;
use App\Models\Experience;
use App\Models\ShareACoffee;

class SearchProductForm extends Component
{
    public int $activeType = 0;

    public function render()
    {
        return view('livewire.search-product-form');
    }

    public function  changeType(int $type){
        $this->activeType = $type;
    }
    /*     protected const TYPES = [
        Service::class,
        Experience::class,
        ShareACoffee::class
    ];

    protected const MAX_RESULTS = 5;

    public string $type     = "service";
    public string $search   = "";
    public string $location = "";
    public string $category = "";

    public int $activeType = 0;

    public string $isSearchActive   = false;
    public string $isLocationActive = false;
    public string $isCategoryActive = false;

    public function updatedActiveType()
    {
        $this->selectType();
    }




    public function searchTags()
    {
        $first = Tag::where('name->es', 'like', "{$this->search}%")
            ->orderBy('name->es')->pluck('name')->toArray();

        $second = Tag::where('name->es', 'like', "%{$this->search}%")
            ->where('name->es', 'not like', "{$this->search}%")
            ->orderBy('name->es')->pluck('name')->toArray();

        return array_merge($first, $second);
    }

    protected function selectType()
    {
        $type = ['service', 'experience', 'share-a-coffee'];
        $this->type = $type[$this->activeType];
    } */
}
