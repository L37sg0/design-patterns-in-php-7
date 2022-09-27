<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\Decorator\Tests;

use L37sg0\DesignPatterns\Structural\Decorator\DoubleRoomBooking;
use L37sg0\DesignPatterns\Structural\Decorator\ExtraBed;
use L37sg0\DesignPatterns\Structural\Decorator\WiFi;
use PHPUnit\Framework\TestCase;

class DecoratorTest extends TestCase
{
    public function testCanCalculatePriceForBasicDoubleRoomBooking() {
        $booking = new DoubleRoomBooking();
        var_dump($booking);
        $this->assertSame(40, $booking->calculatePrice());
        $this->assertSame('double room', $booking->getDescription());
    }

    public function testCanCalculatePriceForDoubleRoomBookingWithWiFi() {
        $booking = new DoubleRoomBooking();
        $booking = new WiFi($booking);
        var_dump($booking);
        $this->assertSame(42, $booking->calculatePrice());
        $this->assertSame('double room with wifi', $booking->getDescription());
    }

    public function testCanCalculatePriceForDoubleRoomBookingWithWiFiAndExtraBed() {
        $booking = new DoubleRoomBooking();
        $booking = new WiFi($booking);
        $booking = new ExtraBed($booking);
        var_dump($booking);
        $this->assertSame(72, $booking->calculatePrice());
        $this->assertSame('double room with wifi with extra bed', $booking->getDescription());
    }
}