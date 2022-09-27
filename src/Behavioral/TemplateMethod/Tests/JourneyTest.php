<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\TemplateMethod\Tests;

use L37sg0\DesignPatterns\Behavioral\TemplateMethod\BeachJourney;
use L37sg0\DesignPatterns\Behavioral\TemplateMethod\CityJourney;
use PHPUnit\Framework\TestCase;

class JourneyTest extends TestCase
{
    public function testCanGetOnVacationOnTheBeach()
    {
        $beachJourney = new BeachJourney();
        $beachJourney->takeATrip();

        $this->assertSame([
            'Buy a flight ticket',
            'Taking the plane',
            'Swimming and sun-bathing',
            'Taking the plane'
        ], $beachJourney->getThingsToDo());
    }

    public function testCanGetOnVacationInTheCity()
    {
        $cityJourney = new CityJourney();
        $cityJourney->takeATrip();

        $this->assertSame([
            'Buy a flight ticket',
            'Taking the plane',
            'Eat, drink, take photos and sleep',
            'Buy a gift',
            'Taking the plane'
        ], $cityJourney->getThingsToDo());
    }
}