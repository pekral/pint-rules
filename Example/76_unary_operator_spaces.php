<?php

declare(strict_types = 1);

// Example for: unary_operator_spaces
// Rule: unary_operator_spaces => true

$number = 42;
echo $number;
$negative = -$number;
echo $negative;
$positive = +$number;
echo $positive;

$boolean = true;
echo $boolean;
$not = !$boolean;
echo $not;

$increment = ++$number;
echo $increment;
$decrement = --$number;
echo $decrement;

function processData(): void
{
    $value = 10;
    $result = -$value;

    return;
}
