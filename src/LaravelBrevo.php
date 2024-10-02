<?php

namespace RizwanSarfraz\LaravelBrevo;

use ReflectionClass;
use Exception;

class LaravelBrevo extends Base
{
    /**
     * Brevo constructor.
     */
    public function __construct()
    {
        parent::__construct(); // Call the parent Base class constructor
    }

    /**
     * Dynamically handle API class instantiation.
     *
     * @param string $name      The name of the API class being called.
     * @param array $arguments  Arguments passed to the API class.
     *
     * @return object           Instance of the requested API class.
     * @throws Exception        If the API class does not exist.
     */
    public function __call($name, $arguments)
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
