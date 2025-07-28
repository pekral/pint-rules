<?php

declare(strict_types = 1);

// Example for: ordered_interfaces
// Rule: ordered_interfaces => true

interface LoggerInterface
{

    public function log(string $message): void;

}

interface CacheInterface
{

    public function get(string $key): mixed;

    public function set(string $key, mixed $value): void;

}

interface UserInterface
{

    public function getId(): int;

    public function getName(): string;

}

class UserService implements CacheInterface, LoggerInterface, UserInterface
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
        return null;
    }
    
    public function set(string $key, mixed $value): void
    {
        // Set value
    }
    
    public function log(string $message): void
    {
        // Log message
    }

}
