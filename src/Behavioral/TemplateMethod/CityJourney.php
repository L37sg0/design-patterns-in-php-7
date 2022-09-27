<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\TemplateMethod;

class CityJourney extends Journey
{

    /**
     * @inheritDoc
     */
    protected function enjoyVacation(): string
    {
        return 'Eat, drink, take photos and sleep';
    }

    protected function buyGift(): ?string
    {
        return 'Buy a gift';
    }
}