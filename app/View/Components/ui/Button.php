<?php

namespace Components\UI;

use Illuminate\View\Component;

class Button extends Component
{
    public $size;
    public $disabled;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $size = 'md', $disabled = false)
    {
        $this->size = $size;
        $this->disabled = $disabled;
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

    public function disabled()
    {
        return $this->disabled ? 'disabled' : ' ';
    }
}
