<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Creational\FactoryMethod\Tests;

use L37sg0\DesignPatterns\Creational\FactoryMethod\FileLogger;
use L37sg0\DesignPatterns\Creational\FactoryMethod\FileLoggerFactory;
use L37sg0\DesignPatterns\Creational\FactoryMethod\StdoutLogger;
use L37sg0\DesignPatterns\Creational\FactoryMethod\StdoutLoggerFactory;
use PHPUnit\Framework\TestCase;

class FactoryMethodTest extends TestCase
{
    public function testCanCreateStdoutLogging() {
        $loggerFactory = new StdoutLoggerFactory();
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(StdoutLogger::class, $logger);
    }

    public function testCanCreateFileLogger() {
        $loggerFactory = new FileLoggerFactory(sys_get_temp_dir());
        $logger = $loggerFactory->createLogger();

        $this->assertInstanceOf(FileLogger::class, $logger);
    }
}