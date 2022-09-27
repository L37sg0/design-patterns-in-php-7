<?php

namespace L37sg0\DesignPatterns\Creational\AbstractFactory;

class WinWriterFactory implements WriterFactory
{

    public function createCsvWriter(): CsvWriter
    {
        return new WinCsvWriter();
    }

    public function createJsonWriter(): JsonWriter
    {
        return new WinJsonWriter();
    }
}