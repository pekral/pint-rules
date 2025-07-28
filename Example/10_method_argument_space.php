<?php

declare(strict_types = 1);

// Example for: method_argument_space
// Rule: method_argument_space => true

function createUser(): void
{
    return new User($name, $email, $age);
}

function processData($input, $options = [], $callback = null): void
{
    // Process data
}

class UserService
{

    public function findUser($id, $includeProfile = true): void
    {
        // Find user
    }
    
    public function updateUser($id, $data, $validate = true): void
    {
        // Update user
    }

}
