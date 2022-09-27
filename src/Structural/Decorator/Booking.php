<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\Decorator;

interface Booking
{
    public function calculatePrice(): int;

    public function getDescription(): string;
}