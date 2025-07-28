<?php

declare(strict_types=1);

/**
 * Example demonstrating phpdoc_no_useless_inheritdoc rule
 */

interface LoggerInterface
{
    /**
     * Logs a message
     *
     * @param string $message
     * @return void
     */
    public function log(string $message): void;
}

class FileLogger implements LoggerInterface
{
    /**
     * Logs a message to a file
     *
     * @param string $message
     * @return void
     */
    public function log(string $message): void
    {
    }
} 