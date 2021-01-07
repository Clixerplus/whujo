<?php

namespace App\Traits;

use Illuminate\Support\Str;

trait HasSlug {


    /**
     * Generate slug from model name.
     *
     * @return String
     */
    public function getSlugAttribute():String
    {
        return Str::slug($this->name);
    }

}
