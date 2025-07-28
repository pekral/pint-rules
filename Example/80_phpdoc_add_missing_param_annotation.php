<?php

declare(strict_types = 1);

// Example for: phpdoc_add_missing_param_annotation
// Rule: phpdoc_add_missing_param_annotation => true

/**
 * Function with complete parameter annotations
 *
 * @param string $name User name
 * @param int $age User age
 * @param array $data Additional data
 * @return array User information
 */
function createUser(string $name, int $age, array $data = []): array
{
    return ['name' => $name, 'age' => $age, 'data' => $data];
}

class Example
{

    /**
     * Method with complete parameter annotations
     *
     * @param string $property Property name
     * @param mixed $value Property value
     */
    public function setProperty(string $property, $value): void
    {
        $this->$property = $value;
    }

}
