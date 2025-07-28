<?php

declare(strict_types = 1);

// Example for: combine_consecutive_unsets
// Rule: combine_consecutive_unsets => true

$array = ['key1' => 'value1', 'key2' => 'value2', 'key3' => 'value3'];

unset($array['key1'], $array['key2']);

$config = [
    'setting1' => 'value1',
    'setting2' => 'value2',
    'setting3' => 'value3',
    'setting4' => 'value4',
];

unset($config['setting1'], $config['setting2'], $config['setting3']);

echo $array;
echo $config;
