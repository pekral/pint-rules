<?php

declare(strict_types = 1);

// Example for: visibility_required
// Rule: visibility_required => true

class UserExample
{

    /** @var string */
    private $name;
    
    /** @var string */
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

interface User
{

    public function getName(): string;

    public function setEmail(string $email): void;

}
