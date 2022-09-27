<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\Proxy;

class BankAccountProxy extends HeavyBankAccount implements BankAccount
{
    private ?int $balance = null;

    public function getBalance():int {
        // Because calculating balance is so expensive,
        // the usage of BankAccount::getBalance() is delayed until it really is needed
        // and will not be calculated again for this instance.

        if ($this->balance === null) {
            $this->balance = parent::getBalance();
        }
        return $this->balance;
    }
}