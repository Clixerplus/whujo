<?php

namespace App\Http\Livewire\Search;

use Livewire\Component;

class Category extends Component
{
    public $model = '';
    public $category = '';

    public function mount($type)
    {
        $this->model = $this->setType($type);
    }

    public function render()
    {
        return view('livewire.search.category', [
            'categories' => $this->getCategories()
        ]);
    }

    private function getCategories()
    {
        return \App\Models\Category::where('product_type', $this->model)->get();
    }

    private function setType($type)
    {
        return [
            \App\Models\Service::class,
            \App\Models\Experience::class,
            \App\Models\ShareACoffee::class
        ][$type];
    }
}
