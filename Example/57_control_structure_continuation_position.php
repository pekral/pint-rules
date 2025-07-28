<?php

declare(strict_types = 1);

// Example for: control_structure_continuation_position
// Rule: control_structure_continuation_position => true

if ($condition1
    && $condition2
    && $condition3
) {
    doSomething();
}

$result = $value1 > $value2
    ? 'greater'
    : 'less or equal';

$array = [
    'key1' => 'value1',
    'key2' => 'value2',
    'key3' => 'value3',
];

echo $result;
echo $array;
