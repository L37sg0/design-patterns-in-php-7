<?php

namespace L37sg0\DesignPatterns\Creational\AbstractFactory;

interface CsvWriter
{
    public function write(array $line): string;
}