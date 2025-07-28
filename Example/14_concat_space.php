<?php

declare(strict_types = 1);

// Example for: concat_space
// Rule: concat_space => {"spacing": "one"}

$fullName = $firstName . ' ' . $lastName;
echo $fullName;
$message = 'Hello ' . $name . '!';
echo $message;
$path = $basePath . '/' . $filename;
echo $path;

$complex = $prefix . ' ' . $middle . ' ' . $suffix;
echo $complex;
$url = $protocol . '://' . $host . ':' . $port . '/' . $path;
echo $url;
