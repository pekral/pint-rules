<?php

declare(strict_types = 1);

// Example for: phpdoc_var_without_name
// Rule: phpdoc_var_without_name => true

/**
 * @var string $name
 */
$name = 'John';
echo $name;

/**
 * @var int $age
 */
$age = 30;
echo $age;

/**
 * @var array $data
 */
$data = ['key' => 'value'];
echo $data;

/**
 * @var bool $active
 */
$active = true;
echo $active;
