<?php

declare(strict_types = 1);

// Example for: switch_case_space
// Rule: switch_case_space => true

switch ($value) {
    case 'option1':
        doSomething();

        break;

    case 'option2':
        doSomethingElse();

        break;

    default:
        doDefault();

        break;
}

switch ($status) {
    case 200:
        return 'OK';

    case 404:
        return 'Not Found';

    case 500:
        return 'Server Error';

    default:
        return 'Unknown';
}
