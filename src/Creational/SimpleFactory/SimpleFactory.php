<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Creational\SimpleFactory;

class SimpleFactory
{
    public function createBicycle(): Bicycle {
        return new Bicycle();
    }
}