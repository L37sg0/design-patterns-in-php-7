<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Specification;

class AndSpecification implements Specification
{
    /** @var Specification[] $specifications */
    private array $specifications;

    public function __construct(array $specifications) {
        $this->specifications = $specifications;
    }

    /**
     * If at least one specification is false, return false, else return true.
     * @param Item $item
     * @return bool
     */
    public function isSatisfiedBy(Item $item): bool
    {
        foreach ($this->specifications as $specification) {
            if (!$specification->isSatisfiedBy($item)) {
                return false;
            }
        }
        return true;
    }
}