<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Strategy;

interface Comparator
{
    /**
     * @param mixed $a
     * @param mixed $b
     * @return int
     */
    public function compare($a, $b): int;
}