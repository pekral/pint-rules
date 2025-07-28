<?php

declare(strict_types = 1);

// Example for: linebreak_after_opening_tag
// Rule: linebreak_after_opening_tag => true

$variable = 'value';
echo $variable;

function test(): void
{
    return;
}

class Example
{

    private string $property = 'value';
    
    public function method(): void
    {
        // Method implementation
    }

}
