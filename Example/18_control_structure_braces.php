<?php

declare(strict_types = 1);

// Example for: control_structure_braces
// Rule: control_structure_braces => true

if ($condition) {
    doAction();
}

if ($condition) {
    doAction();
} else {
    doOtherAction();
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
