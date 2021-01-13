<?php

namespace App\View\Components;

use Illuminate\View\Component;

class EmblaCarouselParallax extends Component
{
    /**
     * @var Collection
     */
    public $items;

    /**
     * @var String "Experiencias | Servicios"
     */
    public $type;

    /**
     * @var String "V01 | V02 | V03 | V04 | V05 | V06"
     */
    public $cardType;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($items, $type, $cardType)
    {
        $this->items = $items;

        $this->type  = $type;

        $this->cardType = 'card-' . $cardType;
    }


    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.embla-carousel-parallax');
    }
}
