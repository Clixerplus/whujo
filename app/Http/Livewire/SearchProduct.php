<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use App\Models\Service;
use App\Models\Experience;
use App\Models\ShareACoffee;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use App\Http\Livewire\AbstractComponents\SearchableComponent;

class SearchProduct extends SearchableComponent
{
    public $search;

    public $type;

    public $location;

    public $online = true;

    public $local = false;

    public $tag = '';

    public $min_price = null;

    public $max_price = null;

    protected $queryString = [
        'search'   => ['except' => ''],
        'type'     => ['except' => ''],
        'location' => ['except' => ''],
        'page'     => ['except' => 1],
    ];

    public function mount()
    {
        $this->search = request()->search;
        $this->type   = request()->type;
    }

    public function render()
    {

        $results = empty($this->search) ?:  $this->getResults();

        return view('livewire.search-product', [
            'results' => $results,
            'tags' => Tag::where('type', $this->getType())->select('name')->orderBy('name', 'asc')->get()
        ]);
    }

    protected function getType()
    {
        $productType = [
            'service' => Service::class,
            'experience' => Experience::class,
            'share-a-coffee' => ShareACoffee::class,
        ];

        return $productType[$this->type];
    }

    /**
     * @return LengthAwarePaginator
     */
    public function getResults()
    {
        $model = $this->model();

        $model = new $model;

        $results = $model::withAnyTags([$this->search], get_class($model))
            ->when($this->tag, function ($query, $tag) use ($model) {
                return $query->withAnyTags([$tag], get_class($model));
            })->get();

        return $results;
    }

    function model()
    {
        return $this->getType();
    }

    function searchableFields()
    {
        return [
            'name',
        ];
    }

    public function clearPrice()
    {
        $this->reset(['min_price', 'max_price']);
    }
}
