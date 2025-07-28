<?php

declare(strict_types = 1);

// Example for: function_declaration
// Rule: function_declaration => true

function processData(array $data): array
{
    return array_map('trim', $data);
}

function calculateSum(int $a, int $b): int
{
    return $a + $b;
}

function isValidEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function logMessage(string $message): void
{
    echo $message;
}
