<?php

declare(strict_types = 1);

// Example for: single_space_around_construct
// Rule: single_space_around_construct => true

$instance = new ClassName();
echo $instance;
$result = clone $object;
echo $result;
$isObject = $object instanceof ClassName;
echo $isObject;

if ($condition) {
    doSomething();
}

$array = ['item1', 'item2'];
echo $array;
$count = count($array);

$string = 'Hello World';
$length = strlen($string);
