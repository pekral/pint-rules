<?php

declare(strict_types = 1);

// Example for: no_spaces_after_function_name
// Rule: no_spaces_after_function_name => true

function test(): void
{
    return $param;
}

function processData(): void
{
    return $input;
}

function calculate(): void
{
    return $a + $b;
}

$result = test('value');
echo $result;
$data = processData('input');
echo $data;
$sum = calculate(1, 2);
echo $sum;
