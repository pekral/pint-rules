<?php

declare(strict_types = 1);

/**
 * Example demonstrating phpdoc_no_useless_inheritdoc rule
 */
interface Logger
{

    /**
     * Logs a message
     */
    public function log(string $message): void;

}

class FileLogger implements Logger
{

    /**
     * Logs a message to a file
     */
    public function log(string $message): void
    {
        // Log message to file
        echo $message;
    }

}
