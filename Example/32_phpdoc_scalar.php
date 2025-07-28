<?php

declare(strict_types = 1);

// Example for: phpdoc_scalar
// Rule: phpdoc_scalar => true

$title = '';
$count = 0;
$enabled = false;
/** @var string $title Page title */
$title = '';
/** @var int $count Item count */
$count = 0;
/** @var bool $enabled Feature enabled */
$enabled = false;
echo $title;
echo $count;
echo $enabled;

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
