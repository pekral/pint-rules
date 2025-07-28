<?php

declare(strict_types = 1);

// Example for: short_scalar_cast
// Rule: short_scalar_cast => true

$string = (string) 42;
echo $string;
$integer = (int) '123';
echo $integer;
$float = (float) '3.14';
echo $float;
$boolean = (bool) 1;
echo $boolean;
$array = (array) 'string';
echo $array;

function processData(string $value): string
{
    return (string) $value;
}

class Example
{

    public function getValue(): int
    {
        return (int) $this->property;
    }

}
