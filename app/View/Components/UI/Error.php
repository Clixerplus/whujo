<?php

namespace App\View\Components\UI;

use Illuminate\View\Component;

class Error extends Component
{
    public $name;

    public $icon;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($name, $icon = false)
    {
        $this->name = $name;

        $this->icon = $icon;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.ui.error');
    }
}
