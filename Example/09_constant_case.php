<?php

declare(strict_types = 1);

// Example for: constant_case
// Rule: constant_case => true

const APP_NAME = 'My Application';
const MAX_RETRY_COUNT = 3;
const DEFAULT_TIMEOUT = 30;

class Config
{

    public const string DATABASE_HOST = 'localhost';
    public const int DATABASE_PORT = 3306;
    public const string API_VERSION = 'v1';

}

define('DEBUG_MODE', true);
define('LOG_LEVEL', 'info');
