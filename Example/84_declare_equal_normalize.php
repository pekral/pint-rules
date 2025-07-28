<?php

declare(strict_types=1);

/**
 * Example demonstrating declare_equal_normalize rule
 * 
 * This rule normalizes spacing around equals sign in declare statements
 */

// Correct usage - normalized spacing in declare statements
declare(strict_types=1);
declare(ticks=1);
declare(encoding='UTF-8');

// Additional examples - various declare statements
declare(strict_types=1, ticks=1);
declare(encoding='UTF-8', strict_types=1);

// Function with declare statement
function exampleFunction(): void
{
    declare(strict_types=1);
    
    $value = 42;
    echo $value;
}

// Class with declare statement
class ExampleClass
{
    public function exampleMethod(): void
    {
        declare(strict_types=1);
        
        $result = 10 + 20;
        return $result;
    }
}

// Multiple declare statements
declare(strict_types=1);
declare(ticks=1);
declare(encoding='UTF-8');

// Example usage after declare statements
$number = 123;
$string = 'hello';
$array = [1, 2, 3]; 