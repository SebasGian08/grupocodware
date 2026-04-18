<?php

namespace App\Providers;

use Illuminate\Support\Facades\Schema;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\View;
use App\Models\Service;
use Illuminate\Pagination\Paginator;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        $this->app->bind('path.public', function() {
            return base_path();
        });
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