<?php

declare(strict_types = 1);

// Example for: phpdoc_trim
// Rule: phpdoc_trim => true

/**
 * User service class
 *
 * @param string $name User name
 */
function createUser(string $name): User
{
    return new User($name);
}

/**
 * Process data
 *
 * @param array $data Input data
 * @param bool $validate Whether to validate
 * @return array Processed data
 */
function processData(array $data, bool $validate = true): array
{
    if ($validate) {
        return array_filter($data);
    }

    return $data;
}
