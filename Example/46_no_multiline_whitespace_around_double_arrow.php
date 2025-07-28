<?php

declare(strict_types = 1);

// Example for: no_multiline_whitespace_around_double_arrow
// Rule: no_multiline_whitespace_around_double_arrow => true

$config = [
    'cache' => false,
    'debug' => true,
    'timeout' => 30,
];

$nested = [
    'level1' => [
        'level2' => [
            'level3' => 'value',
        ],
    ],
];

$simple = ['key' => 'value', 'other' => 'data'];

echo $config;
echo $nested;
echo $simple;
