<?php

declare(strict_types = 1);

// Example for: object_operator_without_whitespace
// Rule: object_operator_without_whitespace => true

class User
{

    public function getName(): string
    {
        return 'John';
    }
    
    public function getEmail(): string
    {
        return 'john@example.com';
    }

}

$user = new User();
echo $user;
$name = $user->getName();
echo $name;
$email = $user->getEmail();
echo $email;

$result = $user->getName()->toUpperCase();
echo $result;
