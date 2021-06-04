<?php

namespace App\Providers;


use App\View\Components\UI\Alert;
use App\View\Components\UI\Badge;
use App\View\Components\UI\Error;
use App\View\Components\UI\Input;
use App\View\Components\UI\Modal;
use App\View\Components\UI\Button;
use App\View\Components\UI\Select;
use App\View\Components\UI\Callout;
use App\View\Components\UI\Checkbox;
use App\View\Components\UI\TextArea;
use Illuminate\Support\Facades\Blade;
use App\View\Components\UI\ButtonIcon;
use App\View\Components\UI\Datepicker;
use App\View\Components\UI\InputSearch;
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
        Blade::component('alert', Alert::class);
        Blade::component('modal', Modal::class);
        Blade::component('button-icon', ButtonIcon::class);
        Blade::component('datepicker', Datepicker::class);
        Blade::component('badge', Badge::class);
        Blade::component('checkbox', Checkbox::class);
        Blade::component('button', Button::class);
        Blade::component('input-search', InputSearch::class);
        Blade::component('dropdown', Dropdown::class);
    }
}

