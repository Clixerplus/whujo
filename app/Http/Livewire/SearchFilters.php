<?php

namespace App\Http\Livewire;

use App\Models\Tag;
use App\Models\Service;
use Livewire\Component;
use App\Models\Experience;
use App\Models\ShareACoffee;
use Adrianorosa\GeoLocation\GeoLocation;

class SearchFilters extends Component
{

    private const TAGS_TYPE = [
        'service' => \App\Models\Service::class,
        'experience' => \App\Models\Experience::class,
        'share-a-coffee' => \App\Models\ShareACoffee::class
    ];

    public $type = null;

    public $category = null;

    public $modality = null;

    public $minPrice = null;

    public $maxPrice = null;

    public $onlyLocal = false;

    public $country = '';

    public $search = null;

    protected $queryString = [
        'type'      => ['except' => ''],
        'category'  => ['except' => ''],
        'modality'  => ['except' => ''],
        'minPrice'  => ['except' => 0],
        'maxPrice'  => ['except' => 0],
        'onlyLocal' => ['except' => false],
    ];

    public function mount()
    {
        $this->type = request()->type ?? null;

        $this->search = request()->search;

        $this->category = request()->category ?? null;
    }

    public function render()
    {
        $productTypeOptions = [
            'all' => 'All',
            'service' => 'Services',
            'experience' => 'Experiences',
            'share-a-coffee' => 'Share a Coffee',
        ];

        $productCategoriesOptions['all'] = 'All';

        if ($this->type != "") {

            $tags = Tag::onlyForType(self::TAGS_TYPE[$this->type])->pluck('name')->toArray();

            foreach ($tags as $tag) {
                $productCategoriesOptions[$tag] = $tag;
            }
        }

        $productModalitiesOptions = [
            'all'    => 'All',
            'online' => 'Online',
            'onsite' => 'Onsite',
        ];



        return view('livewire.search-filters', [
            'types'      => $productTypeOptions,
            'categories' => $productCategoriesOptions,
            'modalities' => $productModalitiesOptions,
            'results'    => $this->getResults()
        ]);
    }

    public function getResults()
    {
        $models = is_null($this->type)
            ? self::TAGS_TYPE
            : [$this->type => data_get(self::TAGS_TYPE, $this->type)];

        foreach ($models as $name => $class) {
            //dd($this->makeQuery($class)->raw());
            $results[$name] = $this->makeQuery($class)->get();
        }

        return $results;
    }

    protected function makeQuery($model)
    {

        return (new $model)::withAnyTags([$this->category], $model)
            ->when(!is_null($this->category), function ($q) use ($model) {

                return $q->orWhere(function ($q) use ($model) {
                    $q->withAnyTags([$this->category], $model);
                });
            })
            ->when(!is_null($this->modality), function ($q) {

                return  $q->where('modality', $this->modality);
            })
            ->when(!is_null($this->minPrice), function ($q) {

                return $q->where('price', '>=', $this->minPrice);
            })
            ->when(!is_null($this->maxPrice), function ($q) {
                $q->where('price', '<=', $this->maxPrice);
            });
    }

    public function selectType($type)
    {
        if (is_null($type) || ($this->type != $type)) {
            $this->reset('category');
        }

        if ($type == 'all') {
            $this->type = null;
        } else {

            $this->type = $type;
        }
    }

    public function selectCategory($category)
    {
        if ($category != 'all') {
            $this->category = $category;
        } else {
            $this->reset('category');
        }
    }

    public function selectModality($modality)
    {
        if ($modality != 'all') {
            $this->modality = $modality;
        } else {
            $this->reset('modality');
        }
    }

    public function selectBudget()
    {
        if (!is_numeric($this->minPrice) || $this->minPrice == 0) {
            $this->minPrice = null;
        }

        if (!is_numeric($this->maxPrice) || $this->maxPrice == 0) {
            $this->maxPrice = null;
        }

        if ($this->minPrice >= $this->maxPrice) {
            $this->maxPrice = null;
        }
    }

    public function updatedOnlyLocal($value)
    {
        $this->country = \Adrianorosa\GeoLocation\GeoLocation::lookup($this->getUserIP())->getCity();
    }

    protected function getUserIP()
    {
        if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
            return $_SERVER['HTTP_CLIENT_IP'];
        }

        if (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
            return $_SERVER['HTTP_X_FORWARDED_FOR'];
        }

        return $_SERVER['REMOTE_ADDR'];
    }

    public function clearBudget()
    {
        $this->reset(['minPrice', 'maxPrice']);
    }

    public function clearOnlyLocal()
    {
        $this->reset('onlyLocal');
    }

    public function clearFilters()
    {
        $this->reset([
            'modality', 'category', 'type'
        ]);
    }
}
