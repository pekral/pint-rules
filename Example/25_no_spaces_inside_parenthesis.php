<?php

declare(strict_types = 1);

// Example for: no_spaces_inside_parenthesis
// Rule: no_spaces_inside_parenthesis => true

function test(string $param): string
{
    return $param;
}

$result = test('value');
echo $result;

if ($condition) {
    doSomething();
}

$array = ['item1', 'item2'];
echo $array;
print_r($array);

$object = new ClassName($param1, $param2);
echo $object;
var_dump($object);
