<?php

namespace App\View\Components\UI;

use Illuminate\View\Component;

class Checkbox extends Component
{

    public $caption;

    public $key;

    public $size;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(String $caption, String $key, string $size = 'w-4 h-4')
    {
        $this->caption = $caption;

        $this->key = $key;

        $this->size = $size;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.ui.chekbox');
    }
}
