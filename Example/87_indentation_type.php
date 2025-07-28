<?php

declare(strict_types=1);

/**
 * Example demonstrating indentation_type rule
 * 
 * This rule ensures consistent indentation type (spaces vs tabs)
 */

// Correct usage - consistent space indentation
class ExampleClass
{
    private string $name;
    private int $value;
    
    public function __construct(string $name, int $value)
    {
        $this->name = $name;
        $this->value = $value;
    }
    
    public function getName(): string
    {
        return $this->name;
    }
    
    public function getValue(): int
    {
        return $this->value;
    }
    
    public function processData(array $data): array
    {
        $result = [];
        
        foreach ($data as $item) {
            if ($item > 0) {
                $result[] = $item * 2;
            }
        }
        
        return $result;
    }
}

// Additional examples - nested structures with proper indentation
function exampleFunction(): void
{
    $config = [
        'database' => [
            'host' => 'localhost',
            'port' => 3306,
            'name' => 'myapp',
        ],
        'cache' => [
            'driver' => 'redis',
            'host' => '127.0.0.1',
        ],
    ];
    
    if (isset($config['database'])) {
        foreach ($config['database'] as $key => $value) {
            echo "Database {$key}: {$value}\n";
        }
    }
}

// Complex nested structure
class ComplexExample
{
    public function complexMethod(): array
    {
        $data = [
            'users' => [
                [
                    'id' => 1,
                    'name' => 'John',
                    'settings' => [
                        'theme' => 'dark',
                        'language' => 'en',
                    ],
                ],
                [
                    'id' => 2,
                    'name' => 'Jane',
                    'settings' => [
                        'theme' => 'light',
                        'language' => 'es',
                    ],
                ],
            ],
        ];
        
        return $data;
    }
} 