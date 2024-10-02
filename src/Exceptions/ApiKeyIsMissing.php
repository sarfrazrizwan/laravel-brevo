<?php

namespace RizwanSarfraz\LaravelBrevo\Exceptions;

use InvalidArgumentException;

/**
 * Exception thrown when the Brevo API key is missing.
 */
final class ApiKeyIsMissing extends InvalidArgumentException
{
    /**
     * Create a new exception instance.
     *
     * @return self
     */
    public static function create(): self
    {
        return new self(
            'The Brevo API key is missing. Please ensure the [api_key] is set in your .env file using the key name: BREVO_API_KEY.'
        );
    }
}
