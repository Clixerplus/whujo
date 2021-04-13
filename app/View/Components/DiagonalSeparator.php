<?php

namespace App\View\Components;

use Illuminate\View\Component;

class DiagonalSeparator extends Component
{

    public $color;

    public $rotate;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($color = null, $rotate = 0)
    {
        $this->color = $color ?? 'text-white';

        $this->rotate = $rotate;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.diagonal-separator');
    }
}
