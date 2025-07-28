<?php

declare(strict_types=1);

/**
 * Example demonstrating braces rule
 * 
 * This rule ensures consistent brace placement in control structures
 */

// Correct usage - consistent brace placement
if ($condition) {
    doSomething();
}

if ($condition) {
    doSomething();
} else {
    doSomethingElse();
}

// Additional examples - various control structures
foreach ($items as $item) {
    process($item);
}

while ($condition) {
    doAction();
}

for ($i = 0; $i < 10; $i++) {
    doOtherAction();
}

switch ($value) {
    case 'option1':
        formatResult();
        break;
    case 'option2':
        initialize();
        break;
    default:
        doDefault();
        break;
}

// Class and function definitions
class ExampleClass
{
    public function exampleMethod()
    {
        if ($this->condition) {
            return true;
        }
        
        return false;
    }
}

function exampleFunction()
{
    if (true) {
        return 'success';
    }
    
    return 'failure';
} 