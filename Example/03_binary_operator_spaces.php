<?php

declare(strict_types = 1);

// Example for: binary_operator_spaces
// Rule: binary_operator_spaces => {"default": "single_space"}

$result = $a + $b;
echo $result;

$product = $x * $y;
echo $product;

$quotient = $m / $n;
echo $quotient;

$remainder = $p % $q;
echo $remainder;

$power = $base ** $exponent;
echo $power;

$complex = ($a + $b) * ($c - $d) / ($e % $f);
echo $complex;

$fullName = $firstName . ' ' . $lastName;
echo $fullName;
