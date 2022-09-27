<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Creational\Prototype;

class BarBookPrototype extends BookPrototype
{
    protected string $category = 'Bar';

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}