<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\AdapterWrapper;

/**
 * This is the adapter class. In production code, this could be a class from another package, some vendor code.
 * Notice that it uses another naming scheme and the implementation does something similar but is another way.
 */
class Kindle implements EBook
{
    private int $totalPages = 100;

    private int $page = 1;

    public function pressNext()
    {
        $this->page++;
    }

    /**
     * Returns current page and total number of pages, like [10, 100] is page 10 of 100
     * @return array|int[]
     */
    public function getPage(): array
    {
        return [$this->page, $this->totalPages];
    }

    public function unlock()
    {
        // TODO: Implement unlock() method.
    }
}