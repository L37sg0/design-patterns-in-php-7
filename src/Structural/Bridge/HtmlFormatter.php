<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\Bridge;

class HtmlFormatter implements Formatter
{

    public function format(string $text): string
    {
        return sprintf('<p>%s</p>', $text);
    }
}