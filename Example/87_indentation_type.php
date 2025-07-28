<?php

declare(strict_types = 1);

/**
 * Example demonstrating indentation_type rule
 *
 * This rule ensures consistent indentation type (spaces vs tabs)
 */

// Correct usage - consistent space indentation
class ExampleClass
{

    public function __construct(private string $name, private int $value)
    {
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
        'cache' => [
            'driver' => 'redis',
            'host' => '127.0.0.1',
        ],
        'database' => [
            'host' => 'localhost',
            'name' => 'myapp',
            'port' => 3306,
        ],
    ];
    
    if (!isset($config['database'])) {
        return;
    }

    foreach ($config['database'] as $key => $value) {
        echo "Database {$key}: {$value}\n";
    }
}

// Complex nested structure
class ComplexExample
{

    public function complexMethod(): array
    {
        return [
            'users' => [
                [
                    'id' => 1,
                    'name' => 'John',
                    'settings' => [
                        'language' => 'en',
                        'theme' => 'dark',
                    ],
                ],
                [
                    'id' => 2,
                    'name' => 'Jane',
                    'settings' => [
                        'language' => 'es',
                        'theme' => 'light',
                    ],
                ],
            ],
        ];
    }

}
