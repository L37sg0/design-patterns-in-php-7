<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Creational\FactoryMethod;

interface LoggerFactory
{
    public function createLogger(): Logger;
}