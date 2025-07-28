<?php

declare(strict_types=1);

/**
 * Example demonstrating no_blank_lines_after_class_opening rule
 */

class User
{
    private string $name;
    public function __construct(string $name)
    {
        $this->name = $name;
    }
}

class Product
{
    private int $id;
    public function __construct(int $id)
    {
        $this->id = $id;
    }
} 