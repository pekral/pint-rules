<?php

declare(strict_types = 1);

// Example for: no_unneeded_braces
// Rule: no_unneeded_braces => true

if ($condition) {
    doSomething();
}

if ($condition) {
    doSomething();
} else {
    doSomethingElse();
}

foreach ($items as $item) {
    process($item);
}

while ($condition) {
    process();
}
