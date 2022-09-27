<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\Facade;

interface OperatingSystem
{
    public function halt();

    public function getName(): string;
}