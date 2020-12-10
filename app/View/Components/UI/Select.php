<?php

namespace App\View\Components\UI;

use Illuminate\View\Component;

class Select extends Component
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name ?? '';
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('components.ui.select');
    }
}
