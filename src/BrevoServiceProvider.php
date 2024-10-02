<?php

namespace RizwanSarfraz\LaravelBrevo;

use Illuminate\Contracts\Support\DeferrableProvider;
use Illuminate\Support\ServiceProvider;
use RizwanSarfraz\LaravelBrevo\Exceptions\ApiKeyIsMissing;
use RizwanSarfraz\LaravelBrevo\Facades\Brevo as BrevoFacade;

class BrevoServiceProvider extends ServiceProvider
{
    /**
     * Register the Brevo services and bindings.
     *
     * @return void
     */
    public function register()
    {
        // Merge the package configuration with the application's configuration
        $this->mergeConfigFrom(__DIR__ . '/../config/config.php', 'brevo');

        // Register Brevo as a singleton in the service container
        $this->app->singleton(BrevoFacade::class, function () {
            $apiKey = config('brevo.api_key');

            // Ensure the API key is valid
            if (empty($apiKey) || !is_string($apiKey)) {
                throw ApiKeyIsMissing::create();
            }

            // Return an instance of Brevo
            return new LaravelBrevo();
        });
        // Create an alias for easier access
        $this->app->alias(BrevoFacade::class, 'brevo');
    }

    /**
     * Bootstrap the Brevo services.
     *
     * @return void
     */
    public function boot()
    {
        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('brevo.php'),
            ], 'config');

        }
    }
}
