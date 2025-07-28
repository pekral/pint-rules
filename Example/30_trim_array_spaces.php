<?php

declare(strict_types = 1);

// Example for: trim_array_spaces
// Rule: trim_array_spaces => true

$array = ['item1', 'item2', 'item3'];
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

echo $array;
echo $config;
echo $nested;
