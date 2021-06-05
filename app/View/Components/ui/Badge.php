<?php

namespace Components\UI;

use Illuminate\View\Component;

class Badge extends Component
{
    public $icon;

    public $iconSide;


    /**
     * @param String $iconSide = left
     * @param String $icon = null
     */
    public function __construct($icon = null, $iconSide = "left")
    {

        $this->iconSide = $iconSide;

        if (!is_null($icon))
            $this->icon = 'icon-' . $icon;
    }



    /**
     * Get the view / contents that represents the component.
     *
     * @return \Illuminate\View\View
     */
    public function render()
    {
        return view('components.ui.badge');
    }
}
