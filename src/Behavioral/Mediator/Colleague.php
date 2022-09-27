<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Mediator;

abstract class Colleague
{
    protected Mediator $mediator;

    final public function setMediator(Mediator $mediator) {
        $this->mediator = $mediator;
    }
}