<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\TemplateMethod;

class BeachJourney extends Journey
{

    /**
     * @inheritDoc
     */
    protected function enjoyVacation(): string
    {
        return 'Swimming and sun-bathing';
    }
}