<?php

declare(strict_types = 1);

/**
 * Example demonstrating class_attributes_separation rule
 *
 * This rule controls spacing between class elements
 */

// Correct usage - proper separation between class attributes
class User
{

    // Properties
    // Constructor
    public function __construct(private string $name, private string $email)
    {
    }
    
    // Getters
    public function getName(): string
    {
        return $this->name;
    }
    
    public function getEmail(): string
    {
        return $this->email;
    }
    
    // Setters
    public function setName(string $name): void
    {
        $this->name = $name;
    }
    
    public function setEmail(string $email): void
    {
        $this->email = $email;
    }

}

// Additional examples - different class structures
class Product
{

    // Constants
    public const string STATUS_ACTIVE = 'active';
    public const string STATUS_INACTIVE = 'inactive';
    
    // Properties
    // Constructor
    public function __construct(private int $id, private string $name, private float $price)
    {
    }
    
    // Public methods
    public function getId(): int
    {
        return $this->id;
    }
    
    public function getName(): string
    {
        return $this->name;
    }
    
    public function getPrice(): float
    {
        return $this->price;
    }
    
    // Private methods
    private function validatePrice(float $price): bool
    {
        return $price > 0;
    }
    
    private function formatPrice(float $price): string
    {
        return number_format($price, 2);
    }

}
