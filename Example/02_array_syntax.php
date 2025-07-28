<?php

declare(strict_types = 1);

// Example for: array_syntax
// Rule: array_syntax => {"syntax": "short"}

$fruits = ['apple', 'banana', 'orange'];
$config = [
    'debug' => true,
    'timeout' => 30,
];

$nested = [
    'users' => [
        'admin' => ['name' => 'Admin', 'role' => 'admin'],
        'user' => ['name' => 'User', 'role' => 'user'],
    ],
];

echo $fruits;
echo $config;
echo $nested;
