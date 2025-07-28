<?php

declare(strict_types = 1);

// Example for: visibility_required
// Rule: visibility_required => true

class UserExample
{

    private $name;
    private $email;
    
    public function getName(): string
    {
        return $this->name;
    }
    
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
    
    protected function validateEmail(): bool
    {
        return filter_var($this->email, FILTER_VALIDATE_EMAIL) !== false;
    }

}

interface UserInterface
{

    public function getName(): string;

    public function setEmail(string $email): void;

}
