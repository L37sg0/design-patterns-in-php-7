<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Specification;

interface Specification
{
    public function isSatisfiedBy(Item $item): bool;
}