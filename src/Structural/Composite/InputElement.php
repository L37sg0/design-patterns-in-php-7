<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\Composite;

class InputElement implements Renderable
{

    public function render(): string
    {
        return '<input type="text" />';
    }
}