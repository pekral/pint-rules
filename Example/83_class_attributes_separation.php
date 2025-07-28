<?php

declare(strict_types=1);

/**
 * Example demonstrating class_attributes_separation rule
 * 
 * This rule controls spacing between class elements
 */

// Correct usage - proper separation between class attributes
class User
{
    // Properties
    private string $name;
    private string $email;
    
    // Constructor
    public function __construct(string $name, string $email)
    {
        $this->name = $name;
        $this->email = $email;
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
    const STATUS_ACTIVE = 'active';
    const STATUS_INACTIVE = 'inactive';
    
    // Properties
    private int $id;
    private string $name;
    private float $price;
    
    // Constructor
    public function __construct(int $id, string $name, float $price)
    {
        $this->id = $id;
        $this->name = $name;
        $this->price = $price;
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