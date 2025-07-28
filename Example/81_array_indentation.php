<?php

declare(strict_types=1);

/**
 * Example demonstrating array_indentation rule
 * 
 * This rule ensures proper indentation of array elements
 */

// Correct usage - proper array indentation
$config = [
    'database' => [
        'host' => 'localhost',
        'port' => 3306,
        'name' => 'myapp',
    ],
    'cache' => [
        'driver' => 'redis',
        'host' => '127.0.0.1',
    ],
];

// Additional examples - nested arrays with proper indentation
$users = [
    [
        'id' => 1,
        'name' => 'John Doe',
        'email' => 'john@example.com',
        'roles' => [
            'admin',
            'user',
        ],
    ],
    [
        'id' => 2,
        'name' => 'Jane Smith',
        'email' => 'jane@example.com',
        'roles' => [
            'user',
        ],
    ],
];

// Complex nested structure
$settings = [
    'app' => [
        'name' => 'My Application',
        'version' => '1.0.0',
        'debug' => false,
    ],
    'database' => [
        'connections' => [
            'mysql' => [
                'driver' => 'mysql',
                'host' => 'localhost',
                'database' => 'forge',
                'username' => 'forge',
                'password' => '',
                'charset' => 'utf8mb4',
                'collation' => 'utf8mb4_unicode_ci',
                'prefix' => '',
            ],
        ],
    ],
]; 