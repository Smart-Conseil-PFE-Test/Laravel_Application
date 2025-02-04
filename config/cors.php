<?php

return [
    /*
    |--------------------------------------------------------------------------
    | Laravel CORS Options
    |--------------------------------------------------------------------------
    |
    | The options array allows you to configure the CORS settings for your
    | application. You can specify the allowed origins, methods, headers,
    | and other settings to control how your application handles CORS.
    |
    */

    'paths' => ['api/*', 'sanctum/csrf-cookie','articles/*', 'articles', 'articles/{id}'],  // Add the articles/{id} route

    'allowed_methods' => ['*'],  // Allow all HTTP methods

    'allowed_origins' => ['http://localhost:4200'],  // Allow localhost for development

    'allowed_origins_patterns' => [],  // Empty if no specific patterns needed

    'allowed_headers' => ['*'],  // Allow all headers

    'exposed_headers' => [],  // No specific exposed headers

    'max_age' => 0,  // No caching for CORS

    'supports_credentials' => false,  // Set to false unless you want to allow credentials
];
