<?php

namespace App\Providers;

<<<<<<< HEAD
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;

=======
use Illuminate\Support\Facades\URL;
use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Schema;


>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
<<<<<<< HEAD
        //
=======
        if (env(key: 'APP_ENV') !== 'local') {
            URL::forceScheme(scheme: 'http');
        }
        //check that app is local
        // if ($this->app=='local') {
        //     //if local register your services you require for development
        //     // $this->app->register('Barryvdh\Debugbar\ServiceProvider');
        // } else {
        //     //else register your services you require for production
        //     $this->app['request']->server->set('HTTPS', true);
        // }
>>>>>>> 9782f5b35f6fd799d5a31674d9bba28fe7a6238b
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Schema::defaultStringLength(191);
    }
}
