<?php

namespace Hongyukeji\LaravelSms;

use Illuminate\Support\ServiceProvider;
use Hongyukeji\PhpSms\Sms;

class SmsServiceProvider extends ServiceProvider
{
    /**
     * Register services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(Sms::class, function ($app) {
            return new Sms($app->config->get('sms'));
        });

        $this->app->alias(Sms::class, 'sms');
    }

    /**
     * Bootstrap services.
     *
     * @return void
     */
    public function boot()
    {
        $this->publishes([
            __DIR__ . '/../config/sms.php' => config_path('sms.php'),
        ], 'sms_config');

        $this->mergeConfigFrom(
            __DIR__ . '/../config/sms.php', 'sms'
        );
    }
}
