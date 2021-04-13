<?php

namespace App\Models;

use Spatie\Tags\Tag as SpatieTag;

class Tag extends SpatieTag
{

    public static function scopeSearchByName($query, $search, $type)
    {
        return $query->where('name', 'like', '%' . $search . '%')
            ->where('type', $type);
    }
}
