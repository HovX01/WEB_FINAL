<?php

return [
    'database' => [
        'driver' => env('DB_DRIVER', 'pgsql'),
        'host' => env('DB_HOST', 'localhost'),
        'port' => env('DB_PORT', 5432),
        'dbname' => env('DB_DATABASE', 'web_dev1'),
        'username' => env('DB_USERNAME', 'final'),
        'password' => env('DB_PASSWORD', '123')
    ],
];