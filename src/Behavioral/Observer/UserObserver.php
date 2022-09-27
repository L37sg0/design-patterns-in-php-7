<?php

namespace L37sg0\DesignPatterns\Behavioral\Observer;

use SplSubject;

class UserObserver implements \SplObserver
{
    /** @var array SplSubject[] */
    private array $changedUsers = [];

    /**
     * It is called by the Subject, usually by SplSubject::notify()
     * @inheritDoc
     */
    public function update(SplSubject $subject): void
    {
        $this->changedUsers[] = clone $subject;
    }

    /**
     * @return SplSubject[]
     */
    public function getChangedUsers(): array {
        return $this->changedUsers;
    }
}