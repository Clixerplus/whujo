<?php

namespace App\Http\Livewire;

use App\Models\Service;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Livewire\Abstracts\SearchableComponent;


class ServiceSearch extends SearchableComponent
{

    public $hasMicroservices = false;

    public $microservice = null;

    function model()
    {
        return Service::class;
    }

    public function mount()
    {
        $this->fill(request()->only('search', 'page', 'orderBy'));
    }

    public function render()
    {
        return view('livewire.service-search', [
            'results' => $this->getResults()
                ->paginate(self::PER_PAGE)
        ]);
    }

    public function resetFilters()
    {
        parent::resetFilters();

        $this->reset([
            'hasMicroservices',
            'microservice'
        ]);
    }

    public function apllyFilters(Builder $query)
    {
        $parentQuery = parent::apllyFilters($query);

        return $parentQuery->when(
            $this->hasMicroservices,
            function ($q) {
                $q->has('microservices')
                    ->when($this->microservice, function ($q) {
                        $q->whereHas('microservices', function ($q) {
                            $q->where('name', 'like', '%' . $this->microservice . '%');
                        });
                    });
            }
        );
    }

    public function searchableFields() {}
}
