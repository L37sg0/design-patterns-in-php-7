<?php

namespace L37sg0\DesignPatterns\Creational\AbstractFactory;

class UnixCsvWriter implements CsvWriter
{

    public function write(array $line): string
    {
        return join(',', $line);
    }
}