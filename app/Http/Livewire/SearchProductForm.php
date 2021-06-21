<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use App\Models\Service;
use Livewire\Component;
use App\Models\Experience;
use App\Models\ShareACoffee;

class SearchProductForm extends Component
{
    protected const TYPES = [
        Service::class,
        Experience::class,
        ShareACoffee::class
    ];

    protected const MAX_RESULTS = 5;

    public string $search = '';
    public string $type = '';
    public array $results = [];
    public int $tabActive = 0;

    public function updatedSearch()
    {
        $this->results = $this->makeSearch();
    }

    public function updatedTabActive()
    {
        $this->results = $this->makeSearch();
    }

    public function render()
    {
        $this->selectType();
        return view('livewire.search-product-form');
    }

    public function makeSearch()
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
        $this->type = $type[$this->tabActive];
    }
}
