<?php

declare(strict_types = 1);

// Example for: ternary_to_null_coalescing
// Rule: ternary_to_null_coalescing => true

$name = $user['name'] ?? 'Anonymous';
echo $name;
$value = $config['setting'] ?? 'default';
echo $value;
$result = $data ?? [];
echo $result;

$deepValue = $array['level1']['level2']['level3'] ?? 'fallback';
echo $deepValue;

$legacyCheck = $user['name'] ?? 'Anonymous';
echo $legacyCheck;
$modernCheck = $user['name'] ?? 'Anonymous';
echo $modernCheck;
