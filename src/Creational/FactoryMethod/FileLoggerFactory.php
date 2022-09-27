<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Creational\FactoryMethod;

class FileLoggerFactory implements LoggerFactory
{
    /** @var string $filePath */
    private $filePath;

    public function __construct(string $filePath){
        $this->filePath = $filePath;
    }

    public function createLogger(): Logger
    {
        return new FileLogger($this->filePath);
    }
}