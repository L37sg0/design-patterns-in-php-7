<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\Decorator;

abstract class BookingDecorator implements Booking
{
    protected Booking $booking;

    public function __construct(Booking $booking) {
        $this->booking = $booking;
    }
}