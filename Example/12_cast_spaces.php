<?php

declare(strict_types = 1);

// Example for: cast_spaces
// Rule: cast_spaces => true

$number = (int) $string;
echo $number;
$float = (float) $value;
echo $float;
$array = (array) $object;
echo $array;
$string = (string) $number;
echo $string;
$boolean = (bool) $value;

$result = (int) ($a + $b);
$formatted = (string) number_format($price, 2);
