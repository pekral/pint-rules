<?php

declare(strict_types=1);

/**
 * Example demonstrating phpdoc_tag_casing rule
 *
 * Toto pravidlo zajišťuje správné malá/velká písmena u PHPDoc tagů (např. @param, @return).
 */

/**
 * Returns the user name
 *
 * @param string $prefix
 * @return string
 */
function getUserName(string $prefix): string
{
    return $prefix . 'John Doe';
}

/**
 * Calculates the sum
 *
 * @param int $a
 * @param int $b
 * @return int
 */
function sum(int $a, int $b): int
{
    return $a + $b;
} 