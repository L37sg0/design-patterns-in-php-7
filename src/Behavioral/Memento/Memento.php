<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Memento;

class Memento
{
    private State $state;

    public function __construct(State $state) {
        $this->state = $state;
    }

    public function getState(): State {
        return $this->state;
    }
}