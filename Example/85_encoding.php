<?php

declare(strict_types=1);

/**
 * Example demonstrating encoding rule
 * 
 * This rule ensures proper encoding declaration
 */

// Correct usage - proper encoding declaration
declare(encoding='UTF-8');

// Additional examples - various encoding declarations
declare(encoding='UTF-8', strict_types=1);
declare(strict_types=1, encoding='UTF-8');

// Function with encoding declaration
function exampleFunction(): void
{
    declare(encoding='UTF-8');
    
    $text = 'Hello World';
    echo $text;
}

// Class with encoding declaration
class ExampleClass
{
    public function exampleMethod(): void
    {
        declare(encoding='UTF-8');
        
        $message = 'Example message';
        return $message;
    }
}

// Multiple encoding declarations
declare(encoding='UTF-8');
declare(strict_types=1);

// Example usage with different character encodings
$utf8Text = 'Hello 世界';
$asciiText = 'Hello World';
$specialChars = 'áéíóúñü'; 