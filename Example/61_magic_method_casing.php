<?php

declare(strict_types = 1);

// Example for: magic_method_casing
// Rule: magic_method_casing => true

class Example
{

    public function __construct()
    {
        // Constructor
    }
    
    public function __destruct()
    {
        // Destructor
    }
    
    public function __get(string $name): void
    {
        // Getter
        echo $name;
    }
    
    public function __set(string $name, mixed $value): void
    {
        // Setter
        echo $name . ': ' . $value;
    }
    
    public function __call(string $name, array $arguments): void
    {
        // Call method
        echo $name . ' called with ' . count($arguments) . ' arguments';
    }
    
    public function __toString(): string
    {
        return 'Example';
    }

}
