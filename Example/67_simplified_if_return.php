<?php

declare(strict_types = 1);

// Example for: simplified_if_return
// Rule: simplified_if_return => true

function isPositive(int $number): bool
{
    return $number > 0;
}

function isValidEmail(string $email): bool
{
    return filter_var($email, FILTER_VALIDATE_EMAIL) !== false;
}

function isEmpty(array $array): bool
{
    return count($array) === 0;
}

function isAdmin(User $user): bool
{
    return $user->getRole() === 'admin';
}
