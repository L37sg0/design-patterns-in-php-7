<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Creational\Prototype;

class FooBookPrototype extends BookPrototype
{
    protected string $category = 'Foo';

    public function __clone()
    {
        // TODO: Implement __clone() method.
    }
}