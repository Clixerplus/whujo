<?php

namespace App\View\Components;

use Illuminate\Database\Eloquent\Model;
use Illuminate\View\Component;

class EmblaCarousel extends Component
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
     * @var String
     */
    public $height;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($items, $type, $cardType, $height ="20rem")
    {
        $this->items = $items;

        $this->type  = $type;

        $this->cardType = 'card-'. $cardType;

        $this->height = $height;
    }

    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\Contracts\View\View|string
     */
    public function render()
    {
        return view('components.embla-carousel');
    }
}
