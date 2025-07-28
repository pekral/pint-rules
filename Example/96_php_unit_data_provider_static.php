<?php

declare(strict_types = 1);

/**
 * Example demonstrating php_unit_data_provider_static rule
 *
 * Toto pravidlo zajišťuje, že PHPUnit data provider metody jsou statické.
 */

use PHPUnit\Framework\Attributes\DataProvider;
use PHPUnit\Framework\TestCase;

class MathTest extends TestCase
{

    /**
     * @param mixed $a
     * @param mixed $b
     * @param mixed $expected
     */
    #[DataProvider('additionProvider')]
    public function testAddition($a, $b, $expected): void
    {
        $this->assertEquals($expected, $a + $b);
    }

    public static function additionProvider(): array
    {
        return [
            [1, 2, 3],
            [2, 3, 5],
        ];
    }

}
