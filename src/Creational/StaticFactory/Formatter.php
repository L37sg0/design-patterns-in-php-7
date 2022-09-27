<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Creational\StaticFactory;

interface Formatter
{
    public function format(string $input): string;
}