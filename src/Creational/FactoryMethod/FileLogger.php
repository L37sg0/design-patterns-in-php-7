<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Creational\FactoryMethod;

class FileLogger implements Logger
{

    /** @var string $filePath */
    private $filePath;

    public function __construct(string $filePath) {
        $this->filePath = $filePath;
    }

    public function log(string $message)
    {
        file_put_contents($this->filePath, $message . PHP_EOL, FILE_APPEND);
    }
}