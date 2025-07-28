<?php

declare(strict_types=1);

/**
 * Example demonstrating no_whitespace_in_blank_line rule
 */

class User
{
    private string $name;

    public function __construct(string $name)
    {
        $this->name = $name;
    }

    public function getName(): string
    {
        return $this->name;
    }
}

function foo(): void
{
    $a = 1;

    $b = 2;
} 