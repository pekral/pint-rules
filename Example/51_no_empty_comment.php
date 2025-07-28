<?php

declare(strict_types = 1);

// Example for: no_empty_comment
// Rule: no_empty_comment => true

// This is a valid comment
$variable = 'value';
echo $variable;

function processData(): void
{
    // Process the data
    return;
}

class Example
{

    // Class property
    private string $property = 'value';
    
    // Class method
    public function method(): void
    {
        // Method implementation
    }

}
