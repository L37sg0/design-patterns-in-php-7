<?php

namespace L37sg0\DesignPatterns\Creational\AbstractFactory;

interface JsonWriter
{
    public function write(array $data, bool $formatted): string;
}