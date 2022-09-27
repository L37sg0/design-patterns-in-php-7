<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Mediator;

class Ui extends Colleague
{
    public function outputUserInfo(string $username) {
        echo $this->mediator->getUser($username);
    }
}