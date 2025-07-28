<?php

declare(strict_types = 1);

// Example for: magic_constant_casing
// Rule: magic_constant_casing => true

class Example
{

    public function getInfo(): array
    {
        return [
            'class' => self::class,
            'dir' => __DIR__,
            'file' => __FILE__,
            'function' => __FUNCTION__,
            'line' => __LINE__,
            'method' => __METHOD__,
            'namespace' => __NAMESPACE__,
        ];
    }

}

$info = [
    'file' => __FILE__,
    'line' => __LINE__,
    'trait' => __TRAIT__,
];

echo $info;
