<?php

declare(strict_types = 1);

// Example for: ternary_operator_spaces
// Rule: ternary_operator_spaces => true

$status = $user->isActive() ? 'active' : 'inactive';
echo $status;
$message = $count > 0 ? "Found {$count} items" : 'No items found';
echo $message;
$value = $condition ? $trueValue : $falseValue;
echo $value;

$result = $a > $b ? ($a + $b) : ($a - $b);
echo $result;
$display = $showDetails ? 'Show all details' : 'Show summary only';
echo $display;
