<?php

namespace App\Http\Livewire\AbstractComponents;


use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

abstract class SearchableComponent extends Component
{
    use WithPagination;

    /** @var bool */
    public $readyToLoad = false;

    /** @var string */
    public $search = '';

    /** @var string */
    public $type = '';

    /** @var int */
    protected $paginate = 12;

    /** @var Builder */
    private $query;

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
     *  Prepare query
     */
    public function prepareModelQuery()
    {
        /** @var Model $model */
        $model = app($this->model());

        $this->query = $model->newQuery();
    }

    /**
     * @return mixed
     */
    abstract function model();

    /**
     * Reset model query
     */
    protected function resetQuery()
    {
        $this->prepareModelQuery();
    }

    /**
     * @return Builder
     */
    protected function getQuery(): Builder
    {
        return $this->query;
    }

    /**
     * @param  Builder  $query
     */
    protected function setQuery(Builder $query)
    {
        $this->query = $query;
    }

    /**
     * @param  bool  $search
     * @return \Illuminate\Contracts\Pagination\LengthAwarePaginator
     */
    protected function paginate($search = true)
    {
        if ($search) {
            $this->filterResults();
        }

        $all = $this->query->paginate($this->paginate);
        $currentPage = $all->currentPage();
        $lastPage = $all->lastPage();
        if ($currentPage > $lastPage) {
            $this->page = $lastPage;
        }

        return $this->query->paginate($this->paginate);
    }

    /**
     * @return Builder
     */
    protected function filterResults(): Builder
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

        return $this->query;
    }

    /**
     * @return mixed
     */
    abstract function searchableFields();
}
