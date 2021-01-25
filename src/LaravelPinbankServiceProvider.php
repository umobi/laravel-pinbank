<?php

namespace Umobi\LaravelPinbank;

use Illuminate\Support\ServiceProvider;
use PinBank\Configuration;
use PinBank\PinBank;

class LaravelPinbankServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {
            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('laravel-pinbank.php'),
            ], 'config');
        }
    }

    /**
     * Register the application services.
     */
    public function register()
    {
        // Automatically apply the package configuration
        $this->mergeConfigFrom(__DIR__.'/../config/config.php', 'laravel-pinbank');


        // Register the main class to use with the facade
        $this->app->singleton(LaravelPinbankFacade::class, function () {

            $sandbox = config('laravel-pinbank.sandbox');
            $username = config('laravel-pinbank.username_sandbox');
            $password = config('laravel-pinbank.password_sandbox');
            $request_origin = config('laravel-pinbank.request_origin_sandbox');
            $channel_code = config('laravel-pinbank.channel_code_sandbox');
            $client_code = config('laravel-pinbank.client_code_sandbox');
            $key_store = config('laravel-pinbank.key_store_sandbox');

            if (!$sandbox) {
                $username = config('laravel-pinbank.username');
                $password = config('laravel-pinbank.password');
                $request_origin = config('laravel-pinbank.request_origin');
                $channel_code = config('laravel-pinbank.channel_code');
                $client_code = config('laravel-pinbank.client_code');
                $key_store = config('laravel-pinbank.key_store');
            }

            $configuration = new Configuration($username, $password, $request_origin,
                $channel_code, $client_code, $key_store, $sandbox);

            return new PinBank($configuration);
        });

        $this->app->alias(LaravelPinbankFacade::class, PinBank::class);
    }
}
