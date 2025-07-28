<?php

declare(strict_types = 1);

// Example for: lowercase_keywords
// Rule: lowercase_keywords => true

if ($condition) {
    return true;
}

foreach ($items as $item) {
    if ($item === null) {
        continue;
    }
    
    switch ($item) {
        case 'value':
            break;

        default:
            return false;
    }
}

while ($condition) {
    try {
        doSomething();
    } catch (Throwable $e) {
        throw $e;
    }
}
