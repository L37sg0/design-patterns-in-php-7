<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\Proxy\Tests;

use L37sg0\DesignPatterns\Structural\Proxy\BankAccountProxy;
use PHPUnit\Framework\TestCase;

class ProxyTest extends TestCase
{
    public function testProxyWillOnlyExecuteExpensiveGetBalanceOnce() {
        $bankAccount = new BankAccountProxy();
        $bankAccount->deposit(30);

        // This time balance is being calculated.
        $this->assertSame(30, $bankAccount->getBalance());

        // inheritance allows for BankAccountProxy to behave to an outsider exactly like ServerBankAccount
        $bankAccount->deposit(50);

        // This time the previously calculated balance is returned again without recalculating it
        $this->assertSame(30, $bankAccount->getBalance());
    }
}