<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Creational\StaticFactory;

class FormatString implements Formatter
{

    public function format(string $input): string
    {
        return $input;
    }
}