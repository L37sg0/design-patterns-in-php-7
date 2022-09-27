<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Creational\StaticFactory;

class FormatNumber implements Formatter
{

    public function format(string $input): string
    {
        return number_format((int) $input);
    }
}