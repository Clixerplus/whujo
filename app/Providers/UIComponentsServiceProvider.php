<?php

namespace App\Providers;

use App\View\Components\UI\Callout;
use App\View\Components\UI\Error;
use App\View\Components\UI\Input;
use App\View\Components\UI\Button;
use App\View\Components\UI\Select;
use App\View\Components\UI\TextArea;
use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;
use App\View\Components\UI\SwitchButton;

class UIComponentsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        Blade::component('input', Input::class);
        Blade::component('select', Select::class);
        Blade::component('switch', SwitchButton::class);
        Blade::component('textarea', TextArea::class);
        Blade::component('error', Error::class);
        Blade::component('callout', Callout::class);
    }
}
