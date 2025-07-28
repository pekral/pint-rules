<?php

declare(strict_types = 1);

// Example for: phpdoc_no_empty_return
// Rule: phpdoc_no_empty_return => true

/**
 * Process user data
 *
 * @param array $data User data
 * @return array Processed data
 */
function processUserData(array $data): array
{
    return array_map('trim', $data);
}

/**
 * Validate email address
 *
 * @param string $email Email to validate
 * @return bool Whether email is valid
 */
function isValidEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}
