<?php

declare(strict_types = 1);

/**
 * Example demonstrating general_phpdoc_tag_rename rule
 *
 * This rule renames PHPDoc tags to their standard names
 */

// Correct usage - properly named PHPDoc tags
/**
 * Example class with proper PHPDoc tags
 */
class ExampleClass
{

    /** Example property with proper PHPDoc */
    private string $name;
    
    /**
     * Example method with proper PHPDoc tags
     *
     * @param string $name The name parameter
     * @param int $age The age parameter
     * @return string The formatted result
     * @throws \InvalidArgumentException When parameters are invalid
     */
    public function exampleMethod(string $name, int $age): string
    {
        if ($name === '') {
            throw new InvalidArgumentException('Name cannot be empty');
        }
        
        return "Name: {$name}, Age: {$age}";
    }
    
    /**
     * Static method with proper PHPDoc
     *
     * @param array $data The input data
     * @return array The processed data
     */
    public static function processData(array $data): array
    {
        return array_map('strtoupper', $data);
    }

}

// Additional examples - function with proper PHPDoc tags
/**
 * Example function with comprehensive PHPDoc
 *
 * @param string $input The input string
 * @param bool $uppercase Whether to convert to uppercase
 * @return string The processed string
 * @since 1.0.0
 * @author John Doe
 */
function processString(string $input, bool $uppercase = false): string
{
    if ($uppercase) {
        return strtoupper($input);
    }
    
    return $input;
}

// Interface with proper PHPDoc tags
/**
 * Example interface with proper PHPDoc
 *
 * @package MyPackage
 * @subpackage Interfaces
 */
interface Example
{

    /**
     * Method that must be implemented
     *
     * @param mixed $data The data to process
     * @return bool Success status
     */
    public function process(mixed $data): bool;

}
