<?php

declare(strict_types = 1);

// Example for: no_null_property_initialization
// Rule: no_null_property_initialization => true

class Example
{

    private string $name = '';
    private int $age = 0;
    private bool $active = false;
    private array $data = [];
    
    public function __construct(): void
    {
        // Constructor
    }
    
    public function setName(string $name): void
    {
        $this->name = $name;
    }

}
