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

    public $type = '';

    private $query = null;

    protected $queryString = [
        'search'   => ['except' => ''],
        'type'     => ['except' => ''],
        'page'     => ['except' => 1],
        'orderBy'  => ['except' => 'normal'],
    ];

    protected $orderOption = [
        'normal'  => ['id', 'asc'],
        'lowest'  => ['price', 'asc'],
        'highest' => ['price', 'desc'],
        'newest'  => ['created_at', 'desc'],
    ];


    abstract protected function model();

    abstract protected function searchableFields();



    protected function getResults()
    {
        $this->prepare();


        $this->search();

        $this->filter();

        $this->sorting();

        $this->paginate();

        $this->execute();

        $query = $this->executeQuery($query);

        $query = $this->filterQuery($query);

        $query = $this->sortQuery($query);

        return $query->paginate(self::PER_PAGE);
    }


    protected function prepare()
    {
        $model = $this->model();

        $this->query = new $model();
    }

    protected function search()
    {
        $searchableFields = $this->searchableFields();
        $search = $this->search;
        $this->query->when(!empty($search), function (Builder $q) use ($search, $searchableFields) {
            $searchString = '%' . $search . '%';
            foreach ($searchableFields as $field) {
                if (Str::contains($field, '.')) {
                    $field = explode('.', $field);
                    $q->orWhereHas($field[0], function (Builder $query) use ($field, $searchString) {
                        $query->whereRaw("lower($field[1]) like ?", $searchString);
                    });
                } else {
                    $q->orWhereRaw("lower($field) like ?", $searchString);
                }
            }
        });
    }

    public function filter()
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

    private function prepareQuery()
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
