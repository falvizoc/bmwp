<?php

namespace App\Providers;

use GuzzleHttp\Client;
use Illuminate\Pagination\Paginator;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('GuzzleHttp\Client', function (){
            return new Client([
                'base_uri' => 'https://developers.syscom.mx',
                // You can set any number of default request options.
                'timeout'  => 8.0,
            ]);

        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        Paginator::useBootstrap();
        if($this->app->environment('production')) {
            \URL::forceScheme('https');
        }
    }




}
