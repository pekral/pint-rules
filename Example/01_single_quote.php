<?php

declare(strict_types = 1);

// Example for: single_quote
// Rule: single_quote => {"strings_containing_single_quote_chars": true}

$message = 'Hello World';
echo $message;
$name = 'John\'s book';
echo $name;
$path = 'C:\\Users\\John\\Documents';
echo $path;

$complexString = 'This string contains \'single quotes\' and "double quotes"';
