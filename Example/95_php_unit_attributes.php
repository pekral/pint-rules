<?php

declare(strict_types=1);

/**
 * Example demonstrating php_unit_attributes rule
 *
 * Toto pravidlo převádí PHPUnit anotace na atributy.
 */

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    #[\PHPUnit\Framework\Attributes\Test]
    public function testAddition(): void
    {
        $this->assertEquals(2, 1 + 1);
    }

    #[\PHPUnit\Framework\Attributes\DataProvider('additionProvider')]
    public function testAdditionWithProvider($a, $b, $expected): void
    {
        $this->assertEquals($expected, $a + $b);
    }

    public static function additionProvider(): array
    {
        return [
            [1, 1, 2],
            [2, 2, 4],
        ];
    }
} 