<?php

declare(strict_types = 1);

// Example for: no_trailing_whitespace
// Rule: no_trailing_whitespace => true

$variable = 'value';
echo $variable;
$array = ['item1', 'item2'];
echo $array;
$function = static fn () => 'result';
echo $function;

class Example
{

    /** @var string */
    private $property = 'value';
    
    public function method(): void
    {
        return 'result';
    }

}
