<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Creational\Prototype\Tests;

use L37sg0\DesignPatterns\Creational\Prototype\BarBookPrototype;
use L37sg0\DesignPatterns\Creational\Prototype\FooBookPrototype;
use PHPUnit\Framework\TestCase;

class PrototypeTest extends TestCase
{
    public function testCanGetFooBook() {
        $fooPrototype = new FooBookPrototype();
        $barPrototype = new BarBookPrototype();

        $fooBooks = [];
        $barBooks = [];

        for ($i = 1; $i <= 10; $i++) {
            $book = clone $fooPrototype;
            $book->setTitle('Foo Book No ' . $i);
            $fooBooks[] = $book;
            $this->assertInstanceOf(FooBookPrototype::class, $book);
        }

        for ($i = 1; $i <= 5; $i++) {
            $book = clone $barPrototype;
            $book->setTitle('Bar Book No ' . $i);
            $barBooks[] = $book;
            $this->assertInstanceOf(BarBookPrototype::class, $book);
        }

        var_dump($fooBooks, $barBooks);
    }
}