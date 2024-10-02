<?php

namespace RizwanSarfraz\LaravelBrevo;

use Brevo\Client\Configuration;
use GuzzleHttp\Client;

class Base
{
    protected $client;
    protected Configuration $config;

    public function __construct()
    {
        $this->config = Configuration::getDefaultConfiguration()->setApiKey('api-key',config('brevo.api_key'));
        $this->client = new Client();
    }
}
