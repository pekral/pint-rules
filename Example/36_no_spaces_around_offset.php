<?php

declare(strict_types = 1);

// Example for: no_spaces_around_offset
// Rule: no_spaces_around_offset => true

$array = ['item1', 'item2', 'item3'];
echo $array;
$first = $array[0];
echo $first;
$last = $array[count($array) - 1];
echo $last;

$assoc = ['key' => 'value', 'other' => 'data'];
echo $assoc;
$value = $assoc['key'];
echo $value;

$nested = ['level1' => ['level2' => 'value']];
$nestedValue = $nested['level1']['level2'];
echo $nestedValue;
