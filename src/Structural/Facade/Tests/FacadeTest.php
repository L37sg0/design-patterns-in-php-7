<?php

namespace L37sg0\DesignPatterns\Structural\Facade\Tests;

use L37sg0\DesignPatterns\Structural\Facade\Bios;
use L37sg0\DesignPatterns\Structural\Facade\Facade;
use L37sg0\DesignPatterns\Structural\Facade\OperatingSystem;
use PHPUnit\Framework\TestCase;

class FacadeTest extends TestCase
{
    public function testComputerOn() {
        $os = $this->createMock(OperatingSystem::class);
        $os->method('getName')->will($this->returnValue('Linux'));

        $bios = $this->createMock(Bios::class);
        $bios->method('launch')->with($os);

        /** @noinspection PhpParamsInspection */
        $facade = new Facade($bios, $os);
        $facade->turnOn();
        var_dump($os, $bios, $facade);
        $this->assertSame('Linux', $os->getName());
    }
}