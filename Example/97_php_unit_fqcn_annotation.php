<?php

declare(strict_types=1);

/**
 * Example demonstrating php_unit_fqcn_annotation rule
 *
 * Toto pravidlo zajišťuje, že PHPUnit anotace používají plně kvalifikované názvy tříd.
 */

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    /**
     * @expectedException \PHPUnit\Framework\Exception
     */
    public function testException(): void
    {
        throw new \PHPUnit\Framework\Exception('Test exception');
    }

    /**
     * @dataProvider \ExampleTest::provider
     */
    public function testWithProvider($value): void
    {
        $this->assertTrue(is_numeric($value));
    }

    public static function provider(): array
    {
        return [
            [1],
            [2],
        ];
    }
} 