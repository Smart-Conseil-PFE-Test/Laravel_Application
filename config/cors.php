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

    'paths' => ['api/*', 'sanctum/csrf-cookie', 'articles'],

    'allowed_methods' => ['*'],

    'allowed_origins' => ['http://localhost:4200'],

    'allowed_origins_patterns' => [],

    'allowed_headers' => ['*'],

    'exposed_headers' => [],

    'max_age' => 0,

    'supports_credentials' => false,
];
