<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Service;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        //
    }

    public function boot()
    {
        if (\App::environment('production')) {
            \URL::forceScheme('https');
            $this->app['request']->server->set('HTTPS','on');
        }

        Schema::defaultStringLength(200);
        \Carbon\Carbon::setLocale('es');

        View::composer('*', function ($view) {
            $view->with('servicesMenu', Service::where('estado', 1)->get());
        });
    }
}