<?php 

require_once __DIR__ . '/../vendor/autoload.php'; // Include the autoload file

use PHPUnit\Framework\TestCase;

class UserTest extends TestCase
{
    public function testUserFullName()
    {
        $user = new User();
        $user->first_name = "John";
        $user->last_name = "Doe";
        $this->assertEquals("John Doe", $user->getFullName());
    }

    public function testUserNotEqual()
    {
        $user1 = new User();
        $user1->first_name = "John";
        $user1->last_name = "Doe";

        $user2 = new User();
        $user2->first_name = "Jane";
        $user2->last_name = "Doe";

        $this->assertNotEquals($user1->getFullName(), $user2->getFullName());
    }
}
