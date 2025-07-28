<?php

declare(strict_types = 1);

/**
 * Example demonstrating no_blank_lines_after_class_opening rule
 */
class User
{

    public function __construct(private string $name)
    {
    }

}

class Product
{

    public function __construct(private int $id)
    {
    }

}
