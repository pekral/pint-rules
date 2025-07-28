<?php

declare(strict_types = 1);

// Example for: phpdoc_line_span
// Rule: phpdoc_line_span => {"const": "single", "method": "multi", "property": "single"}

class Example
{

    public const int VALUE = 42;

    private string $property = 'value';
    
    /**
     * Process data with multiple lines
     *
     * @param array $data Input data
     * @param bool $validate Whether to validate
     * @return array Processed data
     */
    public function processData(array $data, bool $validate = true): array
    {
        if ($validate) {
            return array_filter($data);
        }

        return $data;
    }

}
