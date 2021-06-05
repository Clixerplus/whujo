<?php

namespace App\Providers;

use Illuminate\Support\Facades\Blade;
use Illuminate\Support\ServiceProvider;

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
        Blade::componentNamespace('Components\\UI', 'ui');

        /* Blade::component('input', \Components\UI\Input::class);
        Blade::component('select', \Components\UI\Select::class);
        Blade::component('switch', \Components\UI\SwitchButton::class);
        Blade::component('textarea', \Components\UI\TextArea::class);
        Blade::component('error', \Components\UI\Error::class);
        Blade::component('callout', \Components\UI\Callout::class);
        Blade::component('alert', \Components\UI\Alert::class);
        Blade::component('modal', \Components\UI\Modal::class);
        Blade::component('button-icon', \Components\UI\ButtonIcon::class);
        Blade::component('datepicker', \Components\UI\Datepicker::class);
        Blade::component('badge', \Components\UI\Badge::class);
        Blade::component('checkbox', \Components\UI\Checkbox::class);
        Blade::component('button', \Components\UI\Button::class);
        Blade::component('input-search', \Components\UI\InputSearch::class);
        Blade::component('dropdown', \Components\UI\Dropdown::class); */
    }
}
