<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Creational\StaticFactory\Tests;

use InvalidArgumentException;
use L37sg0\DesignPatterns\Creational\StaticFactory\FormatNumber;
use L37sg0\DesignPatterns\Creational\StaticFactory\FormatString;
use L37sg0\DesignPatterns\Creational\StaticFactory\StaticFactory;
use PHPUnit\Framework\TestCase;

class StaticFactoryTest extends TestCase
{
    public function testCanCreateNumberFormatter() {
        $this->assertInstanceOf(FormatNumber::class, StaticFactory::factory('number'));
    }

    public function testCanCreateStringFormatter() {
        $this->assertInstanceOf(FormatString::class, StaticFactory::factory('string'));
    }

    public function testException() {
        $this->expectException(InvalidArgumentException::class);

        StaticFactory::factory('object');
    }
}