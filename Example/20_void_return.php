<?php

declare(strict_types = 1);

// Example for: void_return
// Rule: void_return => true

function processData(): void
{
    // Process data without returning anything
}

function logMessage(string $message): void
{
    echo $message;
}

class Logger
{

    public function log(string $message): void
    {
        // Log message
        echo $message;
    }
    
    public function clear(): void
    {
        // Clear logs
    }

}
