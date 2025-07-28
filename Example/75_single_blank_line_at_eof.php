<?php

declare(strict_types = 1);

// Example for: single_blank_line_at_eof
// Rule: single_blank_line_at_eof => true

$variable = 'value';
echo $variable;

function processData(): void
{
    return;
}

class Example
{

    private string $property = 'value';
    
    public function method(): void
    {
        return;
    }

}
