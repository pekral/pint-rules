<?php

declare(strict_types = 1);

// Example for: combine_consecutive_issets
// Rule: combine_consecutive_issets => true

$array = ['key1' => 'value1', 'key2' => 'value2'];
echo $array;

if (isset($array['key1'], $array['key2'])) {
    processData();
}

$config = ['setting1' => 'value1', 'setting2' => 'value2', 'setting3' => 'value3'];
echo $config;

if (isset($config['setting1'], $config['setting2'], $config['setting3'])) {
    initialize();
}
