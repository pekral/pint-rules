<?php

declare(strict_types=1);

/**
 * Example demonstrating statement_indentation rule
 */

if (true) {
    $a = 1;
    $b = 2;
    if ($a < $b) {
        echo 'a is less than b';
    }
}

foreach ([1, 2, 3] as $item) {
    echo $item;
}

function foo(): void
{
    $x = 5;
    $y = $x + 2;
    if ($y > 5) {
        echo 'y is greater than 5';
    }
} 