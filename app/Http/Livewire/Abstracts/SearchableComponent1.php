<?php

namespace App\Http\Livewire\Abstracts;

use App\QueryFilters\CategoryFilter;
use App\QueryFilters\PriceBetween;
use Livewire\Component;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Pipeline\Pipeline;

abstract class SearchableComponent extends Component
{
    use WithPagination;

    protected const PER_PAGE = 12;

    public $search   = '';

    public $page     = 1;

    public $orderBy  = 'normal';

    public $category = null;

    public $state    = null;

    public $city     = null;

    public $locality = null;

    public $minPrice = 0;

    public $maxPrice = PHP_FLOAT_MAX;

    protected $queryString = [
        'search'   => ['except' => ''],
        'page'     => ['except' => 1],
        'orderBy'  => ['except' => 'normal'],
        'category' => ['except' => null],
        'state'    => ['except' => null],
        'city'     => ['except' => null],
        'locality' => ['except' => null],
        'minPrice' => ['except' => null],
        'maxPrice' => ['except' => PHP_FLOAT_MAX],
    ];

    protected $orderOption = [
        'normal'  => ['id', 'asc'],
        'lowest'  => ['price', 'asc'],
        'highest' => ['price', 'desc'],
        'newest'  => ['created_at', 'desc'],
    ];

    protected $results = null;

    abstract protected function model();

    public function search()
    {
        $this->render();
    }

    protected function getResults()
    {
        $query = $this->generateNewQuery();

        $query = $this->executeQuery($query);

        $query = $this->filterQuery($query);

        $query = $this->sortQuery($query);

        return $query->paginate(self::PER_PAGE);
    }

    protected function executeQuery(Builder $query)
    {
        $search = '%' . $this->search . '%';

        return $query->byNameAndDescription($search)->published();
    }

    protected function filterQuery(Builder $query)
    {
        $data = $this->prepareDataForFiltering($query);

        $query = app(Pipeline::class)
            ->send($data)
            ->through([
                PriceBetween::class,
                CategoryFilter::class,
            ])
            ->then(
                function ($data) {
                    return $data->query;
                }
            );

        return $query->when($this->state, function ($q) {
            $q->where('state_id', $this->state);
        })
            ->when($this->city, function ($q) {
                $q->where('city_id', $this->city);
            })
            ->when($this->locality, function ($q) {
                $q->where('locality_id', $this->locality);
            });
    }

    protected function sortQuery(Builder $query)
    {
        [$order, $dir] = $this->obtainOrder();

        return $query->orderBy($order, $dir);
    }

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

    private function obtainOrder(): array
    {
        return $this->orderOption[$this->orderBy];
    }

    private function generateNewQuery()
    {
        $model = app($this->model());

        return  $model->newQuery();
    }

    private function prepareDataForFiltering($query)
    {
        return (object) [

            'query' => $query,
            'input' => request()->all()['serverMemo']['data'] ?? []

        ];
    }
}
