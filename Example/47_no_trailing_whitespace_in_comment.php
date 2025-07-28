<?php

declare(strict_types = 1);

// Example for: no_trailing_whitespace_in_comment
// Rule: no_trailing_whitespace_in_comment => true

// This is a comment without trailing whitespace
$variable = 'value';
echo $variable;

/*
 * Multi-line comment
 * without trailing whitespace
 */
function test(): void
{
    // Function comment
    return;
}

# Shell-style comment
