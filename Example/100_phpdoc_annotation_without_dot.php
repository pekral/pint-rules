<?php

declare(strict_types = 1);

/**
 * Example demonstrating phpdoc_annotation_without_dot rule
 *
 * Toto pravidlo zajišťuje, že PHPDoc anotace nekončí tečkou.
 */

/**
 * Returns the user name
 *
 * @return string User name
 */
function getUserName(): string
{
    return 'John Doe';
}

/**
 * Calculates the sum
 *
 * @param int $a First number
 * @param int $b Second number
 * @return int Sum of numbers
 */
function sum(int $a, int $b): int
{
    return $a + $b;
}
