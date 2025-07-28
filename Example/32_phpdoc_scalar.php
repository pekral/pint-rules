<?php

declare(strict_types = 1);

// Example for: phpdoc_scalar
// Rule: phpdoc_scalar => true

/**
 * @param string $name User name
 * @param int $age User age
 * @param bool $active Whether user is active
 * @param float $score User score
 * @return string Formatted user info
 */
function formatUserInfo(string $name, int $age, bool $active, float $score): string
{
    return "Name: {$name}, Age: {$age}, Active: " . ($active ? 'Yes' : 'No') . ", Score: {$score}";
}

/**
 * @var string $title Page title
 * @var int $count Item count
 * @var bool $enabled Feature enabled
 */
