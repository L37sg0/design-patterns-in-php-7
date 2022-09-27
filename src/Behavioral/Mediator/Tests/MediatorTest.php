<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Mediator\Tests;

use L37sg0\DesignPatterns\Behavioral\Mediator\Ui;
use L37sg0\DesignPatterns\Behavioral\Mediator\UserRepository;
use L37sg0\DesignPatterns\Behavioral\Mediator\UserRepositoryUiMediator;
use PHPUnit\Framework\TestCase;

class MediatorTest extends TestCase
{
    public function testOutputHelloWorld() {
        $mediator = new UserRepositoryUiMediator(new UserRepository(), new Ui());
        $this->expectOutputString('User: Sponge-Bob');
        $mediator->printInfoAbout('Sponge-Bob');
    }
}