<?php

namespace App\QueryFilters;

use Closure;
use Illuminate\Support\Arr;

class PriceBetween
{
    public function handle($data, Closure $next)
    {

        if ($this->inputHasPriceKeys($data->input) && $this->isPriceFilterActivate($data->input)) {

            $data->query->whereBetween('price', [($data->input['minPrice']), ($data->input['maxPrice'])]);
        }

        return $next($data);
    }

    private function inputHasPriceKeys($input): bool
    {
        return ((Arr::exists($input, 'minPrice')) || (Arr::exists($input, 'minPrice')));
    }

    private function isPriceFilterActivate($input): bool
    {
        return (($input['minPrice'] > 0) || ($input['maxPrice'] < PHP_FLOAT_MAX));
    }
}
