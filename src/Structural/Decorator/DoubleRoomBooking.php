<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\Decorator;

class DoubleRoomBooking implements Booking
{

    public function calculatePrice(): int
    {
        return 40;
    }

    public function getDescription(): string
    {
        return 'double room';
    }
}