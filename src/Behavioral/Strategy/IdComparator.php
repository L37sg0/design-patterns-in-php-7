<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Strategy;

class IdComparator implements Comparator
{

    /**
     * @inheritDoc
     */
    public function compare($a, $b): int
    {
        return $a['id'] <=> $b['id'];
    }
}