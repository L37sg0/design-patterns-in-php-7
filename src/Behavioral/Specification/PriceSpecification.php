<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Specification;

class PriceSpecification implements Specification
{
    private ?float $minPrice;

    private ?float $maxPrice;

    public function __construct(float $minPrice, float $maxPrice) {
        $this->minPrice = $minPrice;
        $this->maxPrice = $maxPrice;
    }

    public function isSatisfiedBy(Item $item): bool
    {
        if ($this->maxPrice != null && $item->getPrice() > $this->maxPrice) {
            return false;
        }
        if ($this->minPrice != null && $item->getPrice() < $this->minPrice) {
            return false;
        }

        return true;
    }
}