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
    protected $tagsType = [
        'service' => Service::class,
        'experience' => Experience::class,
        'share-a-coffee' => ShareACoffee::class
    ];

    public $productType = 'service';

    public $search = null;

    public $results = [];

    public $activeSearch = false;

    public function activeSearch()
    {
        $this->activeSearch = true;
    }

    public function pickResult(string $value)
    {
        $this->search = $value;
        $this->reset('results');
        $this->reset('activeSearch');
    }

    public function render()
    {
        if (!empty($this->search) && $this->activeSearch) {
            $this->results = $this->search();
        }

        return view('livewire.search-product-form');
    }

    protected function search()
    {
        $tags = Tag::SearchByName($this->search, $this->tagsType[$this->productType])
            ->pluck('name')->take(5)->toArray();


        $users = User::where('name', 'like', '%' . $this->search . '%')
            ->pluck('name')->take(5)->toArray();


        $services = Service::withAnyTags([$this->search], Service::class)
            ->orWhere('name', 'like', '%' . $this->search . '%')
            ->pluck('name')->take(5)->toArray();


        $experiences = Experience::withAnyTags([$this->search], Experience::class)
            ->orWhere('name', 'like', '%' . $this->search . '%')
            ->pluck('name')->take(5)->toArray();

        $shareACoffees = ShareACoffee::withAnyTags([$this->search], ShareACoffee::class)
            ->orWhere('name', 'like', '%' . $this->search . '%')
            ->pluck('name')->take(5)->toArray();


        return [
            'tags' => $tags,
            'users' => $users,
            'services' => $services,
            'experiences' => $experiences,
            'share a coffee' => $shareACoffees
        ];
    }
}
