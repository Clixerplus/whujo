<?php

namespace App\Http\Livewire\Abstracts;

use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;

abstract class SearchableComponent extends Component
{
    use WithPagination;

    protected const PER_PAGE = 12;

    public $search  = '';

    public $page    = 1;

    public $orderBy = 'normal';

    protected $queryString = [
        'search'   => ['except' => ''],
        'page'     => ['except' => 1],
        'orderBy'  => ['except' => 'normal'],
    ];

    public $category = null;

    public $state    = null;

    public $city     = null;

    public $locality = null;

    public $minPrice = 0;

    public $maxPrice = PHP_FLOAT_MAX;


    /**
     * SearchableComponent constructor.
     *
     * @param $id
     */
    public function __construct($id)
    {
        parent::__construct($id);
    }

    /**
     * @return mixed
     */
    abstract protected  function model();

    public function resetFilters()
    {
        $this->reset([
            'category', 'maxPrice', 'minPrice',
            'state', 'city', 'locality'
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    public function makeQuery()
    {
        $model = app($this->model());

        $query = $model->newQuery();

        $query = $this->getResults($query);

        $query = $this->apllyFilters($query);

        $query = $this->sortReults($query);

        return $query;
    }

    private function getResults(Builder $query)
    {
        $search = '%' . $this->search . '%';

        return $query->where(function ($q) use ($search) {
            $q->where('name', 'like', $search);
            $q->orWhere('description', 'like', $search);
        })->where('status', STATUS_PUBLISHED);
    }

    protected function apllyFilters(Builder $query)
    {
        return $query
            ->when(($this->minPrice > 0) || ($this->maxPrice < PHP_FLOAT_MAX), function ($q) {
                $q->whereBetween('price', [$this->minPrice, $this->maxPrice]);
            })
            ->when($this->category, function ($q) {
                $q->where('category_id', $this->category);
            })
            ->when($this->state, function ($q) {
                $q->where('state_id', $this->state);
            })
            ->when($this->city, function ($q) {
                $q->where('city_id', $this->city);
            })
            ->when($this->locality, function ($q) {
                $q->where('locality_id', $this->locality);
            });
    }

    private function sortReults(Builder $query)
    {
        [$order, $dir] = $this->obtainOrder();

        return $query->orderBy($order, $dir);
    }

    private function obtainOrder(): array
    {
        $orderOption = [
            'normal'  => ['id', 'asc'],
            'lowest'  => ['price', 'asc'],
            'highest' => ['price', 'desc'],
            'newest'  => ['created_at', 'desc'],
        ];

        return $orderOption[$this->orderBy];
    }
}
