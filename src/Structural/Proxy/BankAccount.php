<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\Proxy;

interface BankAccount
{
    public function deposit(int $amount);

    public function getBalance(): int;
}