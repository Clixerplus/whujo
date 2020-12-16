<?php

namespace App\View\Components;

use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;

class EmblaCarousel extends Component
{

    public $items;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($model)
    {
        $this->items = $model;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.embla-carousel');
    }
}
