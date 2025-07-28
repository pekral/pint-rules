<?php

declare(strict_types = 1);

// Example for: phpdoc_var_without_name
// Rule: phpdoc_var_without_name => true

/**
 * @var string
 */
$name = 'John';
echo $name;

/**
 * @var int
 */
$age = 30;
echo $age;

/**
 * @var array
 */
$data = ['key' => 'value'];
echo $data;

/**
 * @var bool
 */
$active = true;
