<?php
namespace App\Traits;

trait HasRating
{

    public function getRatingAttribute()
    {
        return rand(0, 4) . '.' . rand(0, 9);
    }

    public function getrReviewsCountAttribute()
    {
        return rand(0, 1000);
    }
}
