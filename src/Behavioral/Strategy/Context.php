<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Strategy;

class Context
{
    private Comparator $comparator;

    public function __construct(Comparator $comparator) {
        $this->comparator = $comparator;
    }

    public function executeStrategy(array $elements): array {
        uasort($elements, [$this->comparator, 'compare']);

        return $elements;
    }
}