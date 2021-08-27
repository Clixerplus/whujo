<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\App;

class Localization
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        $session_locale = session()->get('locale');
        $current_locale = app()->get('locale');

        if (!session()->has('locale')) {
            $session_locale = app()->get('locale');
            $current_locale = app()->get('locale');
        }

        if ($session_locale !== $current_locale) {
            $current_locale = $session_locale;
        }

        app()->setLocale($current_locale);

        return $next($request);
    }
}
