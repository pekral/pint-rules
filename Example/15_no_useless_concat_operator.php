<?php

declare(strict_types = 1);

// Example for: no_useless_concat_operator
// Rule: no_useless_concat_operator => true

$message = 'Hello World';
echo $message;

$path = '/var/www/html';
echo $path;

$url = 'https://example.com';
echo $url;

$fullName = $firstName . ' ' . $lastName;
echo $fullName;

$complex = $prefix . ' ' . $suffix;
echo $complex;
