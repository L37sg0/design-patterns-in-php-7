<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\AdapterWrapper;

interface EBook
{
    public function pressNext();

    /**
     * Returns current page and total number of pages, like [10, 100] is page 10 of 100
     * @return int[]
     */
    public function getPage(): array;

    public function unlock();
}