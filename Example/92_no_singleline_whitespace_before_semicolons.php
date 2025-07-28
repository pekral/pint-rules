<?php

declare(strict_types = 1);

/**
 * Example demonstrating no_singleline_whitespace_before_semicolons rule
 */
$a = 1;

for ($i = 0; $i < 10; $i += 1) {
    echo $i;
}

if ($a === 1) {
    // něco
}

function foo(): void
{
    $x = 5;
    $y = $x + 2;
    echo $y;
}
