<?php

namespace App\View\Components\UI;

use Illuminate\View\Component;

class InputSearch extends Component
{

    public $size;

    public $autocomplete_results;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($size = 'md', $autocomplete_results = [])
    {
        $this->size = $size;

        foreach ($autocomplete_results as $result) {
            $key = $this->identifyKey($result);
            $this->autocomplete_results[$key][] = $result->name;
        }

        $this->autocomplete_results =[];

    }

    private function identifyKey($result)
    {
        $keys = [
            \App\Models\Service::class => 'service',
            \App\Models\Experience::class => 'experience',
            \App\Models\ShareACoffee::class => 'share-a-coffe',
            \App\Models\User::class => 'user'
        ];

        return $keys[get_class($result)];
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|\Closure|string
     */
    public function render()
    {
        return view('components.ui.input-search');
    }
}
