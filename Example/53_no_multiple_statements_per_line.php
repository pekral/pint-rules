<?php

declare(strict_types = 1);

// Example for: no_multiple_statements_per_line
// Rule: no_multiple_statements_per_line => true

$variable = 'value';
echo $variable;
$another = 'another value';
echo $another;

if ($condition) {
    doSomething();
}

$result = processData();
echo $result;
$formatted = formatResult($result);
echo $formatted;

$array = ['item1', 'item2'];
$count = count($array);
