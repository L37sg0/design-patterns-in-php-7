<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\Proxy;

class HeavyBankAccount implements BankAccount
{
    /** @var int[] $transactions */
    private array $transactions = [];

    public function deposit(int $amount)
    {
        $this->transactions[] = $amount;
    }

    public function getBalance(): int
    {
        // This is the heavy part, imagine all the transactions even from
        // years and decades ago must be fetched from a database or web service
        // and the balance must be calculated from it.
        return array_sum($this->transactions);
    }
}