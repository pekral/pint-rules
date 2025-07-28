<?php

declare(strict_types = 1);

// Example for: no_empty_phpdoc
// Rule: no_empty_phpdoc => true

/**
 * Class documentation with content
 */
class Example
{

    /** Property documentation */
    private string $property = 'value';
    
    /**
     * Method documentation
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
