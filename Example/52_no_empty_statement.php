<?php

declare(strict_types = 1);

// Example for: no_empty_statement
// Rule: no_empty_statement => true

function processData(): void
{
    // Process data
    return;
}

if ($condition) {
    doSomething();
}

foreach ($items as $item) {
    process($item);
}

while ($condition) {
    process();
}
