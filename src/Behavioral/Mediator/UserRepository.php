<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Mediator;

class UserRepository extends Colleague
{
    public function getUserName(string $user): string {
        return 'User: ' . $user;
    }
}