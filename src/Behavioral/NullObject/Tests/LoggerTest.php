<?php

namespace L37sg0\DesignPatterns\Behavioral\NullObject\Tests;

use L37sg0\DesignPatterns\Behavioral\NullObject\NullLogger;
use L37sg0\DesignPatterns\Behavioral\NullObject\PrintLogger;
use L37sg0\DesignPatterns\Behavioral\NullObject\Service;
use PHPUnit\Framework\TestCase;

class LoggerTest extends TestCase
{
    public function testNullObject() {
        $service = new Service(new NullLogger());
        $this->expectOutputString('');
        $service->doSomething();
    }

    public function testStandardLogger() {
        $service = new Service(new PrintLogger());
        $this->expectOutputString('We are in L37sg0\DesignPatterns\Behavioral\NullObject\Service::doSomething');
        $service->doSomething();
    }
}