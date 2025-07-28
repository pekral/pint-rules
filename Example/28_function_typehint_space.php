<?php

declare(strict_types = 1);

// Example for: function_typehint_space
// Rule: function_typehint_space => true

function test(string $param): string
{
    return $param;
}

function process(array $data, bool $validate = true): array
{
    return $data;
}

function calculate(int $a, int $b): int
{
    return $a + $b;
}
