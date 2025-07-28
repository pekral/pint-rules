<?php

declare(strict_types = 1);

/**
 * Example demonstrating php_unit_set_up_tear_down_visibility rule
 */

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{

    public function testSomething(): void
    {
        $this->assertTrue(true);
    }

    protected function setUp(): void
    {
        parent::setUp();
    }

    protected function tearDown(): void
    {
        parent::tearDown();
    }

}
