<?php

declare(strict_types=1);

/**
 * Example demonstrating no_singleline_whitespace_before_semicolons rule
 */

$a = 1;
$b = 2;

for ($i = 0; $i < 10; $i++) {
    echo $i;
}

if ($a === 1) {
    $b = 3;
}

function foo(): void
{
    $x = 5;
    $y = $x + 2;
} 