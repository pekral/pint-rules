<?php

declare(strict_types = 1);

// Example for: no_alternative_syntax
// Rule: no_alternative_syntax => true

if ($condition) {
    doSomething();
}

foreach ($items as $item) {
    process($item);
}

while ($condition) {
    process();
}

for ($i = 0; $i < 10; $i++) {
    echo $i;
}

switch ($value) {
    case 'option1':
        doSomething();

        break;

    default:
        doDefault();

        break;
}
