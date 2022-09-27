<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\DependencyInjection\Tests;

use L37sg0\DesignPatterns\Structural\DependencyInjection\DatabaseConfiguration;
use L37sg0\DesignPatterns\Structural\DependencyInjection\DatabaseConnection;
use PHPUnit\Framework\TestCase;

class DependencyInjectionTest extends TestCase
{
    public function testDependencyInjection() {
        $config = new DatabaseConfiguration('john.doe', '1234', 'localhost', 3306);
        $connection = new DatabaseConnection($config);
        var_dump($config, $connection);
        $this->assertSame('john.doe:1234@localhost:3306', $connection->getDsn());
    }
}