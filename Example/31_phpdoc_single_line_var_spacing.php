<?php

declare(strict_types = 1);

// Example for: phpdoc_single_line_var_spacing
// Rule: phpdoc_single_line_var_spacing => true

$name = '';
$age = 0;
$active = false;
/** @var string $name User name */
$name = '';
/** @var int $age User age */
$age = 0;
/** @var bool $active Whether user is active */
$active = false;
echo $name;
echo $age;
echo $active;

/**
 * @param string $name User name
 * @param int $age User age
 * @return array User data
 */
function createUser(string $name, int $age): array
{
    return ['name' => $name, 'age' => $age];
}
