<?php

declare(strict_types = 1);

// Example for: no_trailing_comma_in_singleline
// Rule: no_trailing_comma_in_singleline => true

$array = ['item1', 'item2', 'item3'];
$config = [
    'cache' => false,
    'debug' => true,
    'timeout' => 30,
];

function test(string $param1, string $param2, string $param3): string
{
    return $param1 . $param2 . $param3;
}

$result = test('a', 'b', 'c');

echo $array;
echo $config;
echo $result;
