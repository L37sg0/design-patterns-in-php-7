<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Creational\Builder;

use L37sg0\DesignPatterns\Creational\Builder\Parts\Door;
use L37sg0\DesignPatterns\Creational\Builder\Parts\Engine;
use L37sg0\DesignPatterns\Creational\Builder\Parts\Truck;
use L37sg0\DesignPatterns\Creational\Builder\Parts\Venicle;
use L37sg0\DesignPatterns\Creational\Builder\Parts\Wheel;

class TruckBuilder implements Builder
{
    private Truck $truck;

    public function createVenicle(): void
    {
        $this->truck = new Truck();
    }

    public function addWheel(): void
    {
        $this->truck->setPart('wheel11', new Wheel());
        $this->truck->setPart('wheel12', new Wheel());
        $this->truck->setPart('wheel13', new Wheel());
        $this->truck->setPart('wheel14', new Wheel());
        $this->truck->setPart('wheel15', new Wheel());
        $this->truck->setPart('wheel16', new Wheel());
    }

    public function addEngine(): void
    {
        $this->truck->setPart('truckEngine', new Engine());
    }

    public function addDoors(): void
    {
        $this->truck->setPart('rightDoor', new Door());
        $this->truck->setPart('leftDoor', new Door());
    }

    public function getVenicle(): Venicle
    {
        return $this->truck;
    }
}