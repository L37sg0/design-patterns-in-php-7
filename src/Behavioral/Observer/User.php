<?php

namespace L37sg0\DesignPatterns\Behavioral\Observer;

use SplObjectStorage;
use SplObserver;

class User implements \SplSubject
{
    private SplObjectStorage $observers;
    private $email;

    public function __construct() {
        $this->observers = new SplObjectStorage();
    }

    /**
     * @inheritDoc
     */
    public function attach(SplObserver $observer): void
    {
        $this->observers->attach($observer);
    }

    /**
     * @inheritDoc
     */
    public function detach(SplObserver $observer): void
    {
        $this->observers->detach($observer);
    }

    public function changeEmail(string $email): void {
        $this->email = $email;
        $this->notify();
    }

    /**
     * @inheritDoc
     */
    public function notify(): void
    {
        /** @var SplObserver $observer */
        foreach ($this->observers as $observer) {
            $observer->update($this);
        }
    }
}