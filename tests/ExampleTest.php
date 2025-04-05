<?php

use PHPUnit\Framework\TestCase;

class ExampleTest extends TestCase
{
    public function testDummyFunction() // Renamed method to be recognized as a test
    {
        $this->assertEquals(8, 4 + 4);
        $this->assertTrue(true);
    }
}
