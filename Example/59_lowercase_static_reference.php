<?php

declare(strict_types = 1);

// Example for: lowercase_static_reference
// Rule: lowercase_static_reference => true

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
