<?php

namespace App\Http\Livewire\AbstractComponents;


use App\Models\Service;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

abstract class SearchableComponent extends Component
{
    use WithPagination;


    public $readyToLoad = false;

    public $search = '';

    public $type = '';

    protected $paginate = 12;

    private $query;

    public function __construct($id)
    {
        parent::__construct($id);
    }

    protected abstract function model();

    protected abstract function searchableFields();

    protected function prepareQuery()
    {
        $model = $this->model();

        $this->query = $model->newQuery();
    }

    protected function resetQuery(): void
    {
        $this->prepareModelQuery();
    }

    /* protected function getQuery(): Builder
    {
        return $this->query;
    }

    protected function setQuery(Builder $query): void
    {
        $this->query = $query;
    } */

    protected function paginate(bool $search = true)
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
}
