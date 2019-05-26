<?php

namespace Hongyukeji\LaravelSms;

use Illuminate\Support\ServiceProvider;
use Illuminate\Routing\Router;

class LaravelSmsServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/sms.php' => config_path('sms.php'),
        ], 'sms_config');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        $this->mergeConfigFrom(
            __DIR__ . '/../config/sms.php', 'sms'
        );

        $this->app->singleton(Sms::class, function ($app) {
            return new Sms();
        });

        $this->app->alias(Sms::class, 'sms');
    }
}
