<?php

declare(strict_types = 1);

/**
 * Example demonstrating native_function_type_declaration_casing rule
 *
 * This rule ensures proper casing for native PHP function type declarations
 */

// Correct usage - proper casing for native function type declarations
function exampleFunction(): string
{
    return 'example';
}

function processArray(array $data): array
{
    return array_map('strtoupper', $data);
}

function validateString(string $input): bool
{
    return $input !== '';
}

function calculateSum(int $a, int $b): int
{
    return $a + $b;
}

// Additional examples - various native type declarations
function formatFloat(float $number): string
{
    return number_format($number, 2);
}

function processBoolean(bool $flag): string
{
    return $flag ? 'true' : 'false';
}

function handleMixed(mixed $data): string
{
    return (string) $data;
}

function processCallable(callable $callback): mixed
{
    return $callback();
}

// Class methods with native type declarations
class ExampleClass
{

    public function getString(): string
    {
        return 'example string';
    }
    
    public function getArray(): array
    {
        return ['item1', 'item2'];
    }
    
    public function getInt(): int
    {
        return 42;
    }
    
    public function getFloat(): float
    {
        return 3.14;
    }
    
    public function getBool(): bool
    {
        return true;
    }
    
    public function getMixed(): mixed
    {
        return 'mixed value';
    }
    
    public function getCallable(): callable
    {
        return static fn () => 'callback result';
    }

}
