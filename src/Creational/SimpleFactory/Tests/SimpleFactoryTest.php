<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Creational\SimpleFactory\Tests;

use L37sg0\DesignPatterns\Creational\SimpleFactory\Bicycle;
use L37sg0\DesignPatterns\Creational\SimpleFactory\SimpleFactory;

class SimpleFactoryTest extends \PHPUnit\Framework\TestCase
{
    public function testCanCreateBicycle() {
        $bicycle = (new SimpleFactory())->createBicycle();
        $bicycle->driveTo('Ibiza');
        $this->assertInstanceOf(Bicycle::class, $bicycle);
    }
}