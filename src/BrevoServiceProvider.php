<?php

namespace RizwanSarfraz\LaravelBrevo;

use Illuminate\Support\ServiceProvider;
use RizwanSarfraz\LaravelBrevo\Exceptions\ApiKeyIsMissing;
use RizwanSarfraz\LaravelBrevo\Facades\Brevo as BrevoFacade;

class BrevoServiceProvider extends ServiceProvider
{
    public function register(): void
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

    public function boot(): void
    {
        if ($this->app->runningInConsole()) {

            $this->publishes([
                __DIR__.'/../config/config.php' => config_path('brevo.php'),
            ], 'config');

        }
    }
}
