<?php

namespace App\Http\Livewire\Search;

use App\Models\Tag as TagModel;
use Livewire\Component;


class Tag extends Component
{
    public $model  = '';
    public $search = '';

    public function mount($type)
    {
        $this->model = $this->setType($type);
    }

    public function render()
    {
        return view('livewire.search.tag', [
            'tags' => $this->getResults()
        ]);
    }

    private function getResults()
    {
        return !empty($this->search)
            ? TagModel::search($this->search, $this->model)
            : collect();
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
