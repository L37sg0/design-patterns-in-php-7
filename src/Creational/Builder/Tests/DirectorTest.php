<?php

namespace L37sg0\DesignPatterns\Creational\Builder\Tests;

use L37sg0\DesignPatterns\Creational\Builder\CarBuilder;
use L37sg0\DesignPatterns\Creational\Builder\Director;
use L37sg0\DesignPatterns\Creational\Builder\Parts\Car;
use L37sg0\DesignPatterns\Creational\Builder\Parts\Truck;
use L37sg0\DesignPatterns\Creational\Builder\TruckBuilder;
use PHPUnit\Framework\TestCase;

class DirectorTest extends TestCase
{
    public function testCanBuildTruck()
    {
        $truckBuilder = new TruckBuilder();
        $newVenicle = (new Director())->build($truckBuilder);

        $this->assertInstanceOf(Truck::class, $newVenicle);
    }

    public function testCanBuildCar()
    {
        $carBuilder = new CarBuilder();
        $newVenicle = (new Director())->build($carBuilder);

        $this->assertInstanceOf(Car::class, $newVenicle);
    }
}