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

    public static function scopeSearch($query, $search, $type, $lang = 'es')
    {
        $first  = Tag::where("name->{$lang}", 'like', "{$search}%")->where('type', $type)->orderBy('name', 'DESC')->get()->pluck('name')->toArray();
        $second = Tag::where("name->{$lang}", 'like', "%{$search}%")->where('type', $type)->orderBy('name')->get()->pluck('name')->toArray();

        return collect(array_unique(array_merge($first, $second)));
    }
}
