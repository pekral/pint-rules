<?php

declare(strict_types = 1);

// Example for: clean_namespace
// Rule: clean_namespace => true

namespace App\Services;

use App\Models\User;

class UserService
{

    public function __construct()
    {
        // Empty constructor - no initialization needed
    }
    
    public function findUser(int $id): ?User
    {
        return $this->repository->find($id);
    }

}
