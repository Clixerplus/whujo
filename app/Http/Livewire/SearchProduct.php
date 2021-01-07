<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Illuminate\Contracts\Pagination\LengthAwarePaginator;
use App\Http\Livewire\AbstractComponents\SearchableComponent;
use App\Models\Experience;

class SearchProduct extends SearchableComponent
{
    public $type;

    public $location;

    protected $queryString = [
        'search'   => ['except' => ''],
        'type'     => ['except' => ''],
        'location' => ['except' => ''],
        'page'     => ['except' => 1],
    ];

    public function render()
    {

        $results = empty($this->search) ?:  $this->getResults();

        return view('livewire.search-product', [
            'results' => $results,
            'terminos' => ['Termino1', 'Termino2', 'Termino3', 'Termino4',]
        ])->with("search");
    }

    /**
     * @return LengthAwarePaginator
     */
    public function getResults()
    {
        $this->prepareModelQuery();

        $this->setQuery($this->getQuery());

        return $this->paginate();
    }

    function model()
    {
        $this->search = request()->search;

        $this->type   = request()->type;

        if ($this->type == config('product.TYPE_SERVICE'))
            return Service::class;

        if ($this->type == config('product.TYPE_EXPERIENCE'))
            return Experience::class;
    }

    function searchableFields()
    {
        return [
            'name',
        ];
    }
}
