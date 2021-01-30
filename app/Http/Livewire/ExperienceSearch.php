<?php

namespace App\Http\Livewire;

use App\Models\Experience;
use Illuminate\Database\Eloquent\Builder;
use App\Http\Livewire\Abstracts\SearchableComponent;
use App\Http\Livewire\Wizard\InputDuration;
use App\Http\Livewire\Wizard\InputGroupSize;

class ExperienceSearch extends SearchableComponent
{

    public $minimumAge = null;

    public $skillLevel = null;

    public $activityLevel = null;

    public $minGroupSize  = 0;

    public $maxGroupSize  = 15;

    public $minDuration   = 0;

    public $maxDuration   = 17;

    public $privateGroup  = false;

    public $minPrivateGroupPrice = 0;

    public $maxPrivateGroupPrice = PHP_FLOAT_MAX;

    function model()
    {
        return Experience::class;
    }

    public function mount()
    {
        $this->fill(request()->only('search', 'page', 'orderBy'));
    }

    public function render()
    {
        return view('livewire.service-search', [
            'results' => $this->makeQuery()
                ->paginate(self::PER_PAGE)
        ]);
    }

    public function resetFilters()
    {
        parent::resetFilters();

        $this->reset([
            'minimumAge',
            'skillLevel',
            'activityLevel',
            'minGroupSize',
            'maxGroupSize',
            'minDuration',
            'maxDuration',
            'privateGroup',
            'minPrivateGroupPrice',
            'maxPrivateGroupPrice',
        ]);
    }

    public function apllyFilters(Builder $query)
    {
        $parentQuery = parent::apllyFilters($query);

        return $parentQuery->when($this->minimumAge, function ($q) {
            $q->where('minimumAge', '>=', $this->minimumAge);
        })->when($this->skillLevel, function ($q) {
            $q->where('skillLevel', $this->skillLevel);
        })->when($this->activityLevel, function ($q) {
            $q->where('activityLevel', $this->activityLevel);
        })->when($this->minGroupSize >= 0 || $this->maxGroupSize <= 15, function ($q) {
            $q->whereBetween('groupSize', [$this->minGroupSize, $this->maxGroupSize]);
        })->when($this->minDuration >= 0 || $this->maxDuration <= 17, function ($q) {
            $q->whereBetween('duration->hour', [$this->minDuration, $this->maxDuration]);
        })->when($this->privateGroup, function ($q) {
            $q->where('privateGroup', true);
        })->when($this->minPrivateGroupPrice >= 0 || $this->maxPrivateGroupPrice <= PHP_FLOAT_MAX, function ($q) {
            $q->whereBetween('privateGroupPrice', [$this->minPrivateGroupPrice, $this->maxPrivateGroupPrice]);
        });
    }
}
