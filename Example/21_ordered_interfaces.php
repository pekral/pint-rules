<?php

declare(strict_types = 1);

// Example for: ordered_interfaces
// Rule: ordered_interfaces => true

interface Logger
{

    public function log(string $message): void;

}

interface Cache
{

    public function get(string $key): mixed;

    public function set(string $key, mixed $value): void;

}

interface User
{

    public function getId(): int;

    public function getName(): string;

}

class UserService implements Cache, Logger, User
{

    public function getId(): int
    {
        return 1;
    }
    
    public function getName(): string
    {
        return 'John';
    }
    
    public function get(string $key): mixed
    {
        echo "Getting value for key: {$key}";

        return null;
    }
    
    public function set(string $key, mixed $value): void
    {
        // Set value
        echo "Setting value for key {$key}: " . json_encode($value);
    }
    
    public function log(string $message): void
    {
        // Log message
        echo $message;
    }

}
