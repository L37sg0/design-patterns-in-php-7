<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\AdapterWrapper;

interface Book
{
    public function getPage(): int;

    public function open();

    public function turnPage();
}