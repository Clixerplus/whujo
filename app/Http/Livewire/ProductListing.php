<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use App\Models\Service;
use App\Models\Experience;
use App\Models\ShareACoffee;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use App\Http\Livewire\AbstractComponents\SearchableComponent;

class ProductListing extends SearchableComponent
{
    protected const TAGS_TYPE = [
        'service' => Service::class,
        'experience' => Experience::class,
        'share-a-coffee' => ShareACoffee::class,
    ];

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
        $this->type   = 'experience';
    }

    public function render()
    {

        $results = empty($this->search) ?:  $this->getResults();

        return view('livewire.product-listing', [
            'results' => $results,
            'tags' => $this->getTags($this->type),
        ]);
    }

    private function getType($type)
    {
        $productType = [];

        return $productType[$type];
    }

    public function getTags($type)
    {
        return Tag::where('type', self::TAGS_TYPE[$type])->select('name')->orderBy('name', 'asc')->get();
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
        return self::TAGS_TYPE[$this->type];
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
