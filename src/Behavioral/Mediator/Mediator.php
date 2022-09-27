<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Mediator;

interface Mediator
{
    public function getUser(string $username): string;
}