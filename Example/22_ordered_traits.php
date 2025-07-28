<?php

declare(strict_types = 1);

// Example for: ordered_traits
// Rule: ordered_traits => true

trait LoggerTrait
{

    public function log(string $message): void
    {
        // Log message
    }

}

trait CacheTrait
{

    public function cache(string $key, mixed $value): void
    {
        // Cache value
    }

}

trait ValidationTrait
{

    public function validate(array $data): bool
    {
        return true;
    }

}

class UserService
{

    use CacheTrait;
    use LoggerTrait;
    use ValidationTrait;

    public function process(): void
    {
        $this->log('Processing...');
        $this->cache('key', 'value');
        $this->validate([]);
    }

}
