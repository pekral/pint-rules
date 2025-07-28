<?php

declare(strict_types = 1);

// Example for: ordered_traits
// Rule: ordered_traits => true

trait Logger
{

    public function log(string $message): void
    {
        // Log message
        echo $message;
    }

}

trait Cache
{

    public function cache(string $key, mixed $value): void
    {
        // Cache value
        echo "Caching {$key}: " . json_encode($value);
    }

}

trait Validation
{

    public function validate(array $data): bool
    {
        echo 'Validating data: ' . json_encode($data);

        return true;
    }

}

class UserService
{

    use Cache;
    use Logger;
    use Validation;

    public function process(): void
    {
        $this->log('Processing...');
        $this->cache('key', 'value');
        $this->validate([]);
    }

}
