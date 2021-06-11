<?php

namespace Components\UI;

use Illuminate\View\Component;

class Button extends Component
{
    public $size;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $size = 'md')
    {
        $this->size = $size;
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('components.ui.button');
    }
}
