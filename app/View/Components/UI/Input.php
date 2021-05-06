<?php

namespace App\View\Components\UI;

use Illuminate\View\Component;

class Input extends Component
{
    public $key;

    public $size;

    public function __construct($key = '', $size = 'md')
    {
        $this->key = $key;

        $this->size = $size;
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('components.ui.input');
    }
}
