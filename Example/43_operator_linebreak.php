<?php

declare(strict_types = 1);

// Example for: operator_linebreak
// Rule: operator_linebreak => true

$result = $value1
    + $value2
    + $value3;

$message = 'Hello ' . $name . '!';

$condition = $a > $b
    && $c < $d
    && $e === $f;

$array = [
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3',
];

echo $result;
echo $message;
echo $condition;
echo $array;
