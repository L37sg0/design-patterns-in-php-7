<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Creational\FactoryMethod;

class StdoutLoggerFactory implements LoggerFactory
{

    public function createLogger(): Logger
    {
        return new StdoutLogger();
    }
}