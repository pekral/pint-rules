<?php

declare(strict_types = 1);

// Example for: type_declaration_spaces
// Rule: type_declaration_spaces => true

function process(string $input, int $count, bool $validate = true): array
{
    return ['input' => $input, 'count' => $count, 'validate' => $validate];
}

class Example
{

    public function __construct()
    {
        // Empty constructor - no initialization needed
    }

}
