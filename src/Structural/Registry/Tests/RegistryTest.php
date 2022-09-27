<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\Registry\Tests;

use InvalidArgumentException;
use L37sg0\DesignPatterns\Structural\Registry\Registry;
use L37sg0\DesignPatterns\Structural\Registry\Service;
use PHPUnit\Framework\TestCase;

class RegistryTest extends TestCase
{
    private Service $service;

    protected function setUp(): void
    {
        $this->service = $this->getMockBuilder(Service::class)->getMock();
    }

    public function testSetAndGetLogger() {
        Registry::set(Registry::LOGGER, $this->service);

        $this->assertSame($this->service, Registry::get(Registry::LOGGER));
    }

    public function testThrowsExceptionWhenTryingToSetInvalidKey() {
        $this->expectException(InvalidArgumentException::class);
        Registry::set('foobar', $this->service);
    }

    /**
     * Notice @runInSeparateProcess here: without it, a previous test might have set it already and
     * testing would not be possible. That's why you should implement Dependency Injection where an
     * injected class may easily be replaced by a mockup
     * @runInSeparateProcess
     */
    public function testThrowsExceptionWhenTryingToGetNotSetKey() {
        $this->expectException(InvalidArgumentException::class);
        Registry::get(Registry::LOGGER);
    }
}