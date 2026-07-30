<?php

namespace RizwanSarfraz\LaravelBrevo\Tests;

use Orchestra\Testbench\TestCase;
use RizwanSarfraz\LaravelBrevo\BrevoServiceProvider;
use RizwanSarfraz\LaravelBrevo\Exceptions\ApiKeyIsMissing;
use RizwanSarfraz\LaravelBrevo\Facades\Brevo;
use RizwanSarfraz\LaravelBrevo\LaravelBrevo;

class BrevoTest extends TestCase
{
    protected function getPackageProviders($app)
    {
        return [
            BrevoServiceProvider::class,
        ];
    }

    protected function getPackageAliases($app)
    {
        return [
            'Brevo' => Brevo::class,
        ];
    }

    public function test_it_throws_exception_if_api_key_is_missing()
    {
        $this->expectException(ApiKeyIsMissing::class);

        // API Key is not set in config, so resolving should throw exception
        app('brevo');
    }

    public function test_it_can_resolve_laravel_brevo_instance_when_api_key_is_set()
    {
        config(['brevo.api_key' => 'test-api-key']);

        $brevo = app('brevo');

        $this->assertInstanceOf(LaravelBrevo::class, $brevo);
    }

    public function test_it_can_instantiate_api_classes()
    {
        config(['brevo.api_key' => 'test-api-key']);

        /** @var LaravelBrevo $brevo */
        $brevo = app('brevo');

        // Test dynamic instantiation via __call
        $accountApi = $brevo->accountApi();
        $this->assertInstanceOf(\Brevo\Client\Api\AccountApi::class, $accountApi);

        $contactsApi = $brevo->contactsApi();
        $this->assertInstanceOf(\Brevo\Client\Api\ContactsApi::class, $contactsApi);

        // transactionalSMSApi() is correct camelCase: ucfirst('transactionalSMSApi') = 'TransactionalSMSApi'
        // which matches the SDK class name exactly. Both Linux and macOS work correctly.
        $transactionalSmsApi = $brevo->transactionalSMSApi();
        $this->assertInstanceOf(\Brevo\Client\Api\TransactionalSMSApi::class, $transactionalSmsApi);
    }
}
