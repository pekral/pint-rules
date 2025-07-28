<?php

declare(strict_types = 1);

/**
 * Example demonstrating php_unit_method_casing rule
 *
 * Toto pravidlo zajišťuje správné pojmenování testovacích metod v PHPUnit (camelCase).
 */

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{

    public function testAddition(): void
    {
        $this->assertEquals(2, 1 + 1);
    }

    public function testWithDataProvider(): void
    {
        $this->assertTrue(true);
    }

    public function testCamelCaseMethod(): void
    {
        $this->assertFalse(false);
    }

}
