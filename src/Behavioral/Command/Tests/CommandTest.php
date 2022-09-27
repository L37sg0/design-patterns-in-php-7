<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Command\Tests;

use L37sg0\DesignPatterns\Behavioral\Command\HelloCommand;
use L37sg0\DesignPatterns\Behavioral\Command\Invoker;
use L37sg0\DesignPatterns\Behavioral\Command\Receiver;
use PHPUnit\Framework\TestCase;

class CommandTest extends TestCase
{
    public function testInvocation() {
        $invoker    = new Invoker();
        $receiver   = new Receiver();

        $invoker->setCommand(new HelloCommand($receiver));
        $invoker->run();
        $this->assertSame('Hello World', $receiver->getOutput());
    }
}