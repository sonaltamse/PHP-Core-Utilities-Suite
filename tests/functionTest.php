<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Include the autoload file
require_once __DIR__ . '/../src/functions.php'; // Directly include the functions file

use PHPUnit\Framework\TestCase;

class FunctionTest extends TestCase
{
    public function testAddTwoNumbers()
    {
        $this->assertEquals(5, addTwoNumbers(2, 3));
        $this->assertEquals(0, addTwoNumbers(-2, 2));
        $this->assertEquals(-5, addTwoNumbers(-2, -3));
        $this->assertEquals(0, addTwoNumbers(0, 0));
    }

    public function testAddDoesNotReturnTheIncorrectSum()
    {
        $this->assertNotEquals(10, addTwoNumbers(2, 3));
        $this->assertNotEquals(5, addTwoNumbers(-2, 2));
        $this->assertEquals(200, addTwoNumbers(50, 150)); // Corrected expected value
    }
}
