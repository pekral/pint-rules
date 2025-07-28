<?php

declare(strict_types = 1);

// Example for: magic_method_casing
// Rule: magic_method_casing => true

class Example
{

    public function __construct(): void
    {
        // Constructor
    }
    
    public function __destruct(): void
    {
        // Destructor
    }
    
    public function __get(string $name): void
    {
        // Getter
    }
    
    public function __set($name, $value): void
    {
        // Setter
    }
    
    public function __call($name, $arguments): void
    {
        // Call method
    }
    
    public function __toString(): void
    {
        return 'Example';
    }

}
