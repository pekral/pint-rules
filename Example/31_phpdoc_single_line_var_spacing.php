<?php

declare(strict_types = 1);

// Example for: phpdoc_single_line_var_spacing
// Rule: phpdoc_single_line_var_spacing => true

/**
 * @var string $name User name
 * @var int $age User age
 * @var bool $active Whether user is active
 */

/**
 * @param string $name User name
 * @param int $age User age
 * @return array User data
 */
function createUser(string $name, int $age): array
{
    return ['name' => $name, 'age' => $age];
}
