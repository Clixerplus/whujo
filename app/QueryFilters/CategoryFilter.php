<?php

namespace App\QueryFilters;

use Closure;
use Illuminate\Support\Arr;

class CategoryFilter
{
    public function handle($data, Closure $next)
    {

        if ($this->inputHasKeys($data->input) && $this->isFilterActivate($data->input)) {

            $data->query->where('category_id', $data->input['category_id']);
        }

        return $next($data);
    }

    private function inputHasKeys($input): bool
    {
        return Arr::exists($input, 'minPrice');
    }

    private function isFilterActivate($input): bool
    {
        return is_null($input['minPrice']);
    }
}
