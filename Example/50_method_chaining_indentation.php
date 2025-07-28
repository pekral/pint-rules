<?php

declare(strict_types = 1);

// Example for: method_chaining_indentation
// Rule: method_chaining_indentation => true

$result = $queryBuilder
    ->select('*')
    ->from('users')
    ->where('active', true)
    ->orderBy('name')
    ->get();

$formatted = $string
    ->trim()
    ->toLowerCase()
    ->replace('old', 'new')
    ->toString();

$processed = $data
    ->filter()
    ->map(static fn ($item) => $item->process())
    ->collect();

echo $result;
echo $formatted;
echo $processed;
