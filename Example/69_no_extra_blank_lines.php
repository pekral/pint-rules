<?php

declare(strict_types = 1);

// Example for: no_extra_blank_lines
// Rule: no_extra_blank_lines => true

function processData(): void
{
    $data = ['item1', 'item2'];
    echo $data;
    
    foreach ($data as $item) {
        process($item);
    }
    
    return;
}

class Example
{

    private string $property = 'value';
    
    public function method(): void
    {
        return process();
    }

}
