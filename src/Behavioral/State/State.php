<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\State;

interface State
{
    public function proceedToNext(OrderContext $context);

    public function toString(): string;
}