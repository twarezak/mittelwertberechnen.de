<?php

namespace App\Providers;

use Illuminate\Support\Facades\URL;
use Illuminate\Support\Facades\View;
use Illuminate\Support\ServiceProvider;
use Jenssegers\Agent\Agent;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        if (env('APP_ENV') === 'prod') {
            URL::forceScheme('https');
        }
        View::share('siteName', env('SITE_NAME'));
        View::share('siteTitle', env('SITE_TITLE'));
        View::share('siteUrl', env('SITE_URL'));
        View::share('currentUrl', url()->current());
        View::share('appEnv', env('APP_ENV'));
        View::share('adsEnabled', env('ADS_ENABLED'));
        View::share('userAgent', new Agent());
    }
}
