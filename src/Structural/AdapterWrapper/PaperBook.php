<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\AdapterWrapper;

class PaperBook implements Book
{
    private int $page;

    public function getPage(): int
    {
        return $this->page;
    }

    public function open(): void
    {
        $this->page = 1;
    }

    public function turnPage(): void
    {
        $this->page++;
    }
}