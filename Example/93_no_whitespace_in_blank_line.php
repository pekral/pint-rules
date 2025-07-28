<?php

declare(strict_types = 1);

/**
 * Example demonstrating no_whitespace_in_blank_line rule
 */
class User
{

    public function __construct(private string $name)
    {
    }

    public function getName(): string
    {
        return $this->name;
    }

}

function foo(): void
{
    $a = 1;
    echo $a;

    $b = 2;
    echo $b;
}
