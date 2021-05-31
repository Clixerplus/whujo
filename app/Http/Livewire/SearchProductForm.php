<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use App\Models\User;
use App\Models\Service;
use Livewire\Component;
use App\Models\Experience;
use App\Models\ShareACoffee;

class SearchProductForm extends Component
{
    protected const TAGS_TYPE = [
        'service' => Service::class,
        'experience' => Experience::class,
        'share-a-coffee' => ShareACoffee::class
    ];

    protected const MAX_RESULTS = 5;

    public string $search = '';

    public array $results = [];

    public bool $isSearchActive = false;

    public function activateSearch()
    {
        $this->isSearchActive = true;
    }

    public function deactivateSearch()
    {
        $this->isSearchActive = false;
    }

    public function pickResult(string $value)
    {
        $this->search = $value;
        $this->reset('results');
        $this->reset('isSearchActive');
    }

    public function render()
    {
        if (!empty($this->search) && $this->isSearchActive) {
            $this->results = $this->makeSearch();
        }

        return view('livewire.search-product-form');
    }

    protected function makeSearch()
    {
        $results = [];

        foreach (self::TAGS_TYPE as $tag_key => $tag_class) {

            $result = Tag::SearchByName($this->search, $tag_class)
                ->pluck('name')->take(self::MAX_RESULTS)->toArray();

            if (count($result)) {
                $results[$tag_key] = $result;
            }
        }

        return $results;
    }
}
