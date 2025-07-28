<?php

declare(strict_types = 1);

// Example for: native_function_casing
// Rule: native_function_casing => true

$array = ['item1', 'item2', 'item3'];
echo $array;
$count = count($array);
echo $count;
$imploded = implode(', ', $array);
echo $imploded;

$string = 'Hello World';
echo $string;
$length = strlen($string);
echo $length;
$uppercase = strtoupper($string);
echo $uppercase;

$number = 42;
$formatted = number_format($number, 2);
echo $formatted;

$data = ['key' => 'value'];
$json = json_encode($data);
$decoded = json_decode($json, true);
echo $decoded;
