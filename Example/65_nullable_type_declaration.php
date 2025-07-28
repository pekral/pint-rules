<?php

declare(strict_types = 1);

// Example for: nullable_type_declaration
// Rule: nullable_type_declaration => true

function processUser(?string $name, ?int $age = null): ?array
{
    if ($name === null) {
        return null;
    }
    
    return ['name' => $name, 'age' => $age];
}

function getValue(?string $key): ?string
{
    return $key ? 'value' : null;
}

class UserService
{

    public function findUser(?int $id): ?User
    {
        return $id ? new User($id) : null;
    }

}
