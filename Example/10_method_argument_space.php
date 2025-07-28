<?php

declare(strict_types = 1);

// Example for: method_argument_space
// Rule: method_argument_space => true

function createUser(): void
{
    echo 'Creating user';
}

function processData(mixed $input, array $options = [], ?callable $callback = null): void
{
    // Process data
    if ($callback !== null) {
        $callback($input);
    }
    
    if ($options !== []) {
        echo 'Processing with options: ' . json_encode($options);
    }
}

class UserService
{

    public function findUser(int $id, bool $includeProfile = true): void
    {
        // Find user
        echo "Finding user {$id} with profile: " . ($includeProfile ? 'yes' : 'no');
    }
    
    public function updateUser(int $id, array $data, bool $validate = true): void
    {
        // Update user
        if ($validate) {
            echo "Validating data for user {$id}";
        }

        echo "Updating user {$id} with data: " . json_encode($data);
    }

}
