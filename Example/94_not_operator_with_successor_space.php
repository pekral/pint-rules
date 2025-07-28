<?php

declare(strict_types=1);

/**
 * Example demonstrating not_operator_with_successor_space rule
 */

if (! $a) {
    echo 'a is falsy';
}

while (! $done) {
}

function isNotNull($value): bool
{
    return ! is_null($value);
}

$result = ! $flag ? 'no' : 'yes'; 