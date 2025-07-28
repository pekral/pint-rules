<?php

declare(strict_types = 1);

// Example for: phpdoc_indent
// Rule: phpdoc_indent => true

/**
 * Class documentation with proper indentation
 */
class Example
{

    /** Property documentation */
    private string $property = 'value';
    
    /**
     * Method documentation with proper indentation
     *
     * @param string $param Parameter description
     */
    public function method(string $param): void
    {
        return;
    }

}

/**
 * Function documentation
 *
 * @param array $data Input data
 * @return array Processed data
 */
function processData(array $data): array
{
    return $data;
}
