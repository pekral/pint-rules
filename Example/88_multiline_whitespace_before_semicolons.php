<?php

declare(strict_types=1);

/**
 * Example demonstrating multiline_whitespace_before_semicolons rule
 * 
 * This rule controls whitespace before semicolons in multiline statements
 */

// Correct usage - proper whitespace before semicolons in multiline statements
$result = $this->getData()
    ->filter(function ($item) {
        return $item > 0;
    })
    ->map(function ($item) {
        return $item * 2;
    })
    ->toArray();

// Additional examples - various multiline statements
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

$query = $this->createQueryBuilder()
    ->select('u')
    ->from('User', 'u')
    ->where('u.active = :active')
    ->setParameter('active', true)
    ->orderBy('u.name', 'ASC')
    ->getQuery();

// Function calls with proper semicolon placement
$formatted = formatString(
    $input,
    $options
);

$processed = processData(
    $data,
    $filters,
    $sort
);

// Array assignments
$users = [
    'admin' => [
        'name' => 'Administrator',
        'role' => 'admin',
        'permissions' => ['read', 'write', 'delete'],
    ],
    'user' => [
        'name' => 'Regular User',
        'role' => 'user',
        'permissions' => ['read'],
    ],
]; 