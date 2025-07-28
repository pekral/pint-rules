<?php

declare(strict_types = 1);

// Example for: no_space_around_double_colon
// Rule: no_space_around_double_colon => true

class Example
{

    public const string VALUE = 'test';
    
    public static function staticMethod(): void
    {
        // Static method
    }

}

$value = Example::VALUE;
echo $value;
Example::staticMethod();

$className = 'Example';
echo $className;
$className::staticMethod();
