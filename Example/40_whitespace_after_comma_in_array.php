<?php

declare(strict_types = 1);

// Example for: whitespace_after_comma_in_array
// Rule: whitespace_after_comma_in_array => true

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

$mixed = [1, 'string', true, ['nested' => 'value']];

echo $array;
echo $config;
echo $nested;
echo $mixed;
