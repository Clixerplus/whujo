<?php

namespace Components\UI;

use Illuminate\View\Component;

class TextArea extends Component
{
    public $key;

    public function __construct($key)
    {
        $this->key = $key ?? '';
    }

    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('components.ui.textarea');
    }
}
