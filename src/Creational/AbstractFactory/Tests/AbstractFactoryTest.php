<?php

namespace L37sg0\DesignPatterns\Creational\AbstractFactory\Tests;

use L37sg0\DesignPatterns\Creational\AbstractFactory\CsvWriter;
use L37sg0\DesignPatterns\Creational\AbstractFactory\JsonWriter;
use L37sg0\DesignPatterns\Creational\AbstractFactory\UnixWriterFactory;
use L37sg0\DesignPatterns\Creational\AbstractFactory\WinWriterFactory;
use L37sg0\DesignPatterns\Creational\AbstractFactory\WriterFactory;
use PHPUnit\Framework\TestCase;

class AbstractFactoryTest extends TestCase
{
    public function provideFactory() {
        return [
            [new UnixWriterFactory()],
            [new WinWriterFactory()]
        ];
    }

    /**
     * @param WriterFactory $writerFactory
     * @return void
     * @dataProvider provideFactory()
     */
    public function testCanCreateCsvWriterOnUnix(WriterFactory $writerFactory) {
        $this->assertInstanceOf(JsonWriter::class, $writerFactory->createJsonWriter());
        $this->assertInstanceOf(CsvWriter::class, $writerFactory->createCsvWriter());
    }
}