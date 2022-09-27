<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\Flyweight;

interface Text
{
    public function render(string $extrinsicState): string;
}