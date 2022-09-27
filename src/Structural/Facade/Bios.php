<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\Facade;

interface Bios
{
    public function waitForKeyPress();

    public function launch(OperatingSystem $os);

    public function powerDown();

    public function execute();
}