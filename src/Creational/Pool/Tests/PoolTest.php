<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Creational\Pool\Tests;

use L37sg0\DesignPatterns\Creational\Pool\WorkerPool;
use PHPUnit\Framework\TestCase;

class PoolTest extends TestCase
{
    public function testCanGetNewInstancesWithGet() {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $worker2 = $pool->get();
var_dump($pool);
        $this->assertCount(2, $pool);
        $this->assertNotSame($worker1, $worker2);
    }

    public function testCanGetSameInstanceTwiceWhenDisposingItFirst() {
        $pool = new WorkerPool();
        $worker1 = $pool->get();
        $pool->dispose($worker1);
        $worker2 = $pool->get();
var_dump($pool);
        $this->assertCount(1, $pool);
        $this->assertSame($worker1, $worker2);
    }
}