<?php

declare(strict_types = 1);

/**
 * Example demonstrating multiline_whitespace_before_semicolons rule
 *
 * This rule controls whitespace before semicolons in multiline statements
 */

// Correct usage - proper whitespace before semicolons in multiline statements
$this->getData()
    ->filter(static fn ($item) => $item > 0)
    ->map(static fn ($item) => $item * 2)
    ->toArray();

// Additional examples - various multiline statements
[
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

$this->createQueryBuilder()
    ->select('u')
    ->from('User', 'u')
    ->where('u.active = :active')
    ->setParameter('active', true)
    ->orderBy('u.name', 'ASC')
    ->getQuery();

// Function calls with proper semicolon placement
formatString($input, $options);

processData($data, $filters, $sort);

// Array assignments
[
    'admin' => [
        'name' => 'Administrator',
        'permissions' => ['read', 'write', 'delete'],
        'role' => 'admin',
    ],
    'user' => [
        'name' => 'Regular User',
        'permissions' => ['read'],
        'role' => 'user',
    ],
];
