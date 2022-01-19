<?php

namespace App\Providers;

use Illuminate\Contracts\Routing\UrlGenerator;
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    public function register()
    {
        // if (env('REDIRECT_HTTPS')) {
        //     $this->app['request']->server->set('HTTPS', true);
        // }
        if (env('APP_ENV') != 'local') {
            $this->app['request']->server->set('HTTPS', true);
        }
    }

    public function boot(UrlGenerator $url)
    {
        if (env('APP_ENV') != 'local') {
            // URL::formatScheme('https://');
            $url->formatScheme('https://');
        }
        // if (env('REDIRECT_HTTPS')) {
        //     $url->formatScheme('https://');
        // }
    }
}
