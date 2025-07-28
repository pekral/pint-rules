<?php

declare(strict_types = 1);

/**
 * Example demonstrating array_indentation rule
 *
 * This rule ensures proper indentation of array elements
 */

// Correct usage - proper array indentation
$config = [
    'cache' => [
        'driver' => 'redis',
        'host' => '127.0.0.1',
    ],
    'database' => [
        'host' => 'localhost',
        'name' => 'myapp',
        'port' => 3306,
    ],
];
echo $config;

// Additional examples - nested arrays with proper indentation
$users = [
    [
        'email' => 'john@example.com',
        'id' => 1,
        'name' => 'John Doe',
        'roles' => [
            'admin',
            'user',
        ],
    ],
    [
        'email' => 'jane@example.com',
        'id' => 2,
        'name' => 'Jane Smith',
        'roles' => [
            'user',
        ],
    ],
];
echo $users;

// Complex nested structure
$settings = [
    'app' => [
        'debug' => false,
        'name' => 'My Application',
        'version' => '1.0.0',
    ],
    'database' => [
        'connections' => [
            'mysql' => [
                'charset' => 'utf8mb4',
                'collation' => 'utf8mb4_unicode_ci',
                'database' => 'forge',
                'driver' => 'mysql',
                'host' => 'localhost',
                'password' => '',
                'prefix' => '',
                'username' => 'forge',
            ],
        ],
    ],
];
echo $settings;
