<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Memento;

class Ticket
{
    private State $currentState;

    public function __construct() {
        $this->currentState = new State(State::STATE_CREATED);
    }

    public function open() {
        $this->currentState = new State(State::STATE_OPENED);
    }

    public function close() {
        $this->currentState = new State(State::STATE_CLOSED);
    }

    public function assign() {
        $this->currentState = new State(State::STATE_ASSIGNED);
    }

    public function saveToMemento(): Memento {
        return new Memento(clone $this->currentState);
    }

    public function restoreFromMemento(Memento $memento) {
        $this->currentState = $memento->getState();
    }

    public function getState(): State {
        return $this->currentState;
    }
}