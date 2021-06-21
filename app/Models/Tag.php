<?php

namespace App\Models;

use Spatie\Tags\Tag as SpatieTag;
use Illuminate\Support\Facades\DB;

class Tag extends SpatieTag
{

    public static function scopeSearchByName($query, $search, $type)
    {
        $first = Tag::where('name->es', 'like', "{$search}%");

        return $first;
    }

    public static function scopeOnlyForType($query,  $type)
    {
        return $query->where('type', $type);
    }
}
