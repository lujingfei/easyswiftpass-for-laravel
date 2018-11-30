<?php

namespace Geoff\EasySwiftpass;

use Geoff\EasySwiftpass;
use Illuminate\Support\ServiceProvider;

class EasySwiftpassServiceProvider extends ServiceProvider
{
    protected $defer = true;

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        //
        $this->publishes([
            __DIR__ . '/config/easyswiftpass.php' => config_path('easyswiftpass.php'),
        ]);
    }

    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton('easyswiftpass', function ($app) {
            return new EasySwiftpass($app['session'], $app['config']);
        });
    }

    public function provides()
    {
        return ['easyswiftpass'];
    }
}