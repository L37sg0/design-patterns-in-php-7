<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\State;

class StateDone implements State
{
    public function proceedToNext(OrderContext $context)
    {
        // There is nothing more to do.
    }

    public function toString(): string
    {
        return 'done';
    }
}