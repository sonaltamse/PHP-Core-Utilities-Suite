<?php

require_once __DIR__ . '/../vendor/autoload.php'; 

use PHPUnit\Framework\TestCase;

class QueueTest extends TestCase{

    protected $queue;
    protected function setUp(): void {
        $this->queue = new Queue();
    }
    public function testQueue() {
        $this->assertEquals(0, $this->queue->getCount());
    }

    public function testQueuePush() {
        $this->queue->push('Sonal');
        $this->assertEquals(1, $this->queue->getCount()); // Corrected line
    }

    public function testQueuePop() { 
        $this->queue->push('Sonal');      
        $item = $this->queue->pop();
        $this->assertEquals(0, $this->queue->getCount());
        $this->assertEquals('Sonal', $item);
    }

    public function testAnItemIsRemovedFromTheFront() {
        $this->queue->push('Sonal');
        $this->queue->push('John');
        $this->assertEquals("Sonal", $this->queue->pop());
    }
}
