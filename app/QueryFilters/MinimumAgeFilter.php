<?php

namespace App\QueryFilters;

use Closure;
use Illuminate\Support\Arr;

class MinimumAgeFilter
{
    public function handle($data, Closure $next)
    {

        if ($this->inputHasPriceKeys($data->input) && $this->isPriceFilterActivate($data->input)) {

            $data->query->where('minimumAge', '>=', $data->input['minimumAge']);
        }

        return $next($data);
    }

    private function inputHasPriceKeys($input): bool
    {
        return (Arr::exists($input, 'minimumAge'));
    }

    private function isPriceFilterActivate($input): bool
    {
        return is_null($input['minimumAge']);
    }
}
