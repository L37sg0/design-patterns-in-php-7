<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\Bridge;

class PlainTextFormatter implements Formatter
{

    public function format(string $text): string
    {
        return $text;
    }
}