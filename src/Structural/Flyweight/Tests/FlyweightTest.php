<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\Flyweight\Tests;

use L37sg0\DesignPatterns\Structural\Flyweight\TextFactory;
use PHPUnit\Framework\TestCase;

class FlyweightTest extends TestCase
{
    private array $characters = [
        'a', 'b', 'c', 'd', 'e', 'f',
        'g', 'h', 'i', 'j', 'k', 'l',
        'm', 'n', 'o', 'p', 'q', 'r',
        's', 't', 'u', 'v', 'w', 'x',
        'y', 'z'
    ];

    private array $fonts = [
        'Arial', 'Times New Roman',
        'Verdana', 'Helvetica'
    ];

    public function testFlyweight() {
        $factory = new TextFactory();

        for ($i = 0; $i <= 10; $i++) {
            foreach ($this->characters as $char) {
                foreach ($this->fonts as $font) {
                    $flyweight  = $factory->get($char);
                    $renderer   = $flyweight->render($font);

                    $this->assertSame(sprintf('Character %s with font %s' , $char, $font), $renderer);
                }
            }
        }

        foreach ($this->fonts as $word) {
            $flyweight = $factory->get($word);
            $renderer = $flyweight->render('foobar');

            $this->assertSame(sprintf('Word %s with font foobar', $word), $renderer);
        }

        // Flyweight pattern ensures that instances are shared
        // instead of having hundreds of thousands of individual objects.
        // There must be one instance for every char that has been reused for displaying in different fonts.

        $this->assertCount(count($this->characters) + count($this->fonts), $factory);
    }
}