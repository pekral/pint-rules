<?php

declare(strict_types = 1);

// Example for: protected_to_private
// Rule: protected_to_private => true

class BaseClass
{

    /** @var string */
    private $property = 'value';
    
    private function helperMethod(): void
    {
        // Helper method
    }

}

class ChildClass extends BaseClass
{

    /** @var string */
    private $childProperty = 'child value';
    
    public function publicMethod(): void
    {
        // Public method
    }

}
