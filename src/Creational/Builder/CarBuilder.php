<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Creational\Builder;

use L37sg0\DesignPatterns\Creational\Builder\Parts\Car;
use L37sg0\DesignPatterns\Creational\Builder\Parts\Door;
use L37sg0\DesignPatterns\Creational\Builder\Parts\Engine;
use L37sg0\DesignPatterns\Creational\Builder\Parts\Venicle;
use L37sg0\DesignPatterns\Creational\Builder\Parts\Wheel;

class CarBuilder implements Builder
{
    private Car $car;

    public function createVenicle(): void
    {
        $this->car = new Car();
    }

    public function addWheel(): void
    {
        $this->car->setPart('wheelLF', new Wheel());
        $this->car->setPart('wheelRF', new Wheel());
        $this->car->setPart('wheelLR', new Wheel());
        $this->car->setPart('wheelRR', new Wheel());
    }

    public function addEngine(): void
    {
        $this->car->setPart('engine', new Engine());
    }

    public function addDoors(): void
    {
        $this->car->setPart('rightDoor', new Door());
        $this->car->setPart('leftDoor', new Door());
        $this->car->setPart('trunkLid', new Door());
    }

    public function getVenicle(): Venicle
    {
        return $this->car;
    }
}