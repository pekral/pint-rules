<?php

declare(strict_types=1);

/**
 * Example demonstrating php_unit_set_up_tear_down_visibility rule
 */

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function setUp(): void
    {
        parent::setUp();
    }

    public function tearDown(): void
    {
        parent::tearDown();
    }

    public function testSomething(): void
    {
        $this->assertTrue(true);
    }
} 