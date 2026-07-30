<?php

namespace RizwanSarfraz\LaravelBrevo;

use ReflectionClass;
use Exception;

class LaravelBrevo extends Base
{
    public function __call(string $name, array $arguments): object
    {
        // Convert the method name to a corresponding API class name
        $apiClass = 'Brevo\\Client\\Api\\' . ucfirst($name);

        // Check if the API class exists
        if (class_exists($apiClass)) {
            // Instantiate the API class using Reflection with the HTTP client and configuration
            return (new ReflectionClass($apiClass))->newInstanceArgs([$this->client, $this->config]);
        }

        // Throw an exception if the API class doesn't exist
        throw new Exception("The API class [{$apiClass}] does not exist.");
    }
}
