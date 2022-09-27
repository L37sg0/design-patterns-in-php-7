<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Specification;

class NotSpecification implements Specification
{
    private Specification $specification;

    public function __construct(Specification $specification) {
        $this->specification = $specification;
    }

    public function isSatisfiedBy(Item $item): bool
    {
        return !$this->specification->isSatisfiedBy($item);
    }
}