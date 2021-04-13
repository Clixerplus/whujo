<?php

namespace App\Providers;

use SKAgarwal\GoogleApi\PlacesApi;
use Illuminate\Support\ServiceProvider;
use Illuminate\Contracts\Routing\UrlGenerator;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        /* if (env('REDIRECT_HTTPS')) {
            $this->app['request']->server->set('HTTPS', true);
        } */

        $this->app->bind(PlacesApi::class, function($app){
            return new PlacesApi(env('GOOGLE_API_KEY'));
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot(UrlGenerator $url)
    {
    /*     if (env('REDIRECT_HTTPS')) {
            $url->formatScheme('https://');
        } */
    }
}
