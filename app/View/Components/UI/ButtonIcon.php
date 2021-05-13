<?php

namespace App\View\Components\UI;

use Illuminate\View\Component;

class ButtonIcon extends Component
{

    public $icon;

    public $size;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct(string $icon, string $size = 'md')
    {
        $this->icon = 'icon-' . $icon;

        $this->size = $size;

    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.ui.button-icon');
    }
}
