<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Specification;

class OrSpecification implements Specification
{
    /** @var Specification[] $specifications */
    private array $specifications;

    public function __construct(array $specifications) {
        $this->specifications = $specifications;
    }

    /**
     * If at least one specification is true, return true, else return false
     * @param Item $item
     * @return bool
     */
    public function isSatisfiedBy(Item $item): bool
    {
        foreach ($this->specifications as $specification) {
            if ($specification->isSatisfiedBy($item)) {
                return true;
            }
        }
        return false;
    }
}