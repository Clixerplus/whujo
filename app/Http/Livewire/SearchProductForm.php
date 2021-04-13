<?php

namespace App\Http\Livewire;

use App\Models\Tag;
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

    public $active = false;

    public function activeSearch()
    {
        $this->active = true;
    }

    public function pickResult(string $value)
    {
        $this->search = $value;
        $this->reset('results');
        $this->reset('active');
    }

    public function doSomething()
    {
        dd('entra');
    }

    public function render()
    {
        if (!empty($this->search) && $this->active) {
            $this->results = $this->search();
        }

        return view('livewire.search-product-form');
    }

    protected function search()
    {

        return Tag::where('name', 'like', '%' . $this->search . '%')
            ->where('type', $this->tagsType[$this->productType])->pluck('name')->take(5);
    }
}
