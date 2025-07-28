<?php

declare(strict_types = 1);

// Example for: return_type_declaration
// Rule: return_type_declaration => true

function getUserName(): string
{
    return 'John Doe';
}

function calculateSum(int $a, int $b): int
{
    return $a + $b;
}

function isActive(): bool
{
    return true;
}

function getUsers(): array
{
    return ['user1', 'user2'];
}

function processData(): void
{
    // Process data without returning anything
}
