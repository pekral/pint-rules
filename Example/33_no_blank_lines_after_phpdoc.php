<?php

declare(strict_types = 1);

// Example for: no_blank_lines_after_phpdoc
// Rule: no_blank_lines_after_phpdoc => true

/**
 * User service class
 */
class UserService
{

    /**
     * Find user by ID
     */
    public function findUser(int $id): ?User
    {
        echo "Finding user with ID: {$id}";

        return null;
    }
    
    /**
     * Create new user
     */
    public function createUser(string $name): User
    {
        return new User($name);
    }

}
