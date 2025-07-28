<?php

declare(strict_types = 1);

// Example for: single_line_comment_spacing
// Rule: single_line_comment_spacing => true

// This is a comment
$variable = 'value';
echo $variable;

function processData(): void
{
    // Process array
    $data = ['item1', 'item2'];
echo $data;

    // Return void
    return;
}

class Example
{

    // Property comment
    private string $property = 'value';
    
    public function method(): void
    {
        // Method comment
        $result = 'test';
echo $result;

        // Return void
        return;
    }

}
