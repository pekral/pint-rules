<?php

declare(strict_types = 1);

// Example for: comment_to_phpdoc
// Rule: comment_to_phpdoc => true

/**
 * Class documentation
 */
class Example
{

    /** Property documentation */
    private string $property = 'value';
    
    /**
     * Method documentation
     *
     * @param string $param Parameter
     */
    public function method(string $param): void
    {
        echo $param;

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
