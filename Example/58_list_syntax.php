<?php

declare(strict_types = 1);

// Example for: list_syntax
// Rule: list_syntax => true

$array = ['first', 'second', 'third'];
echo $array;

[$first, $second, $third] = $array;

$assoc = ['name' => 'John', 'age' => 30];
echo $assoc;

['name' => $name, 'age' => $age] = $assoc;

$nested = [['a', 'b'], ['c', 'd']];
echo $nested;

[[$a, $b], [$c, $d]] = $nested;
