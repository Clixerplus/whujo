<?php

namespace App\View\Components;

use Illuminate\View\Component;

class StarRating extends Component
{
    const MAX_RATING  = 5;

    const MIN_DECIMAL = 5;

    public $rating;

    public $half;

    /**
     * Create a new component instance.
     *
     * @return void
     */
    public function __construct($rating = 0)
    {
        list($entera, $decimal) = explode('.', $rating);

        throw_if($entera > self::MAX_RATING, \InvalidArgumentException::class, $message = "El valor no puede ser mayor a 5");

        $this->rating = intval($entera);

        $this->half =  intval($decimal) >= self::MIN_DECIMAL ? 1 : 0;
    }



    /**
     * Get the view / contents that represent the component.
     *
     * @return \Illuminate\View\View|string
     */
    public function render()
    {
        return view('components.star-rating');
    }
}
