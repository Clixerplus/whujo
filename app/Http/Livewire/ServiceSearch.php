<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Livewire\Component;
use Illuminate\Support\Str;
use Livewire\WithPagination;
use Illuminate\Database\Eloquent\Builder;
use Illuminate\Database\Eloquent\Collection;

class ServiceSearch extends Component
{
    use WithPagination;

    private const PER_PAGE = 12;

    private $query  = null;

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

    public $hasMicroservices = false;

    public $microservice = null;


    public function mount()
    {
        $this->fill(request()->only('search', 'page'));
    }

    public function render()
    {
        return view('livewire.service-search', [
            'results' => $this->makeQuery()->paginate(self::PER_PAGE)
        ]);
    }
    public function resetFilters()
    {
        $this->reset([
            'category', 'maxPrice', 'minPrice', 'state',
            'city', 'locality'
        ]);
    }

    public function updatingSearch()
    {
        $this->resetPage();
    }

    private function makeQuery()
    {
        $query = (new Service)->newQuery();

        $query = $this->getResults($query);

        $query = $this->apllyFilters($query);

        $query = $this->sortReults($query);

        return $query;
    }

    private function getResults(Builder $query)
    {
        $search = '%' . $this->search . '%';

        return $query->where('status', STATUS_PUBLISHED)
            ->where(function ($q) use ($search) {
                $q->where('name', 'like', $search);
                $q->orWhere('description', 'like', $search);
            });
    }

    private function apllyFilters(Builder $query)
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
            })
            ->when($this->hasMicroservices, function ($q) {
                $q->has('microservices')
                    ->when($this->microservice, function ($q) {
                        $q->whereHas('microservices', function ($q) {
                            $q->where('name', 'like', '%' . $this->microservice . '%');
                        });
                    });
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
