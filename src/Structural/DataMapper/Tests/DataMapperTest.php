<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\DataMapper\Tests;

use InvalidArgumentException;
use L37sg0\DesignPatterns\Structural\DataMapper\StorageAdapter;
use L37sg0\DesignPatterns\Structural\DataMapper\User;
use L37sg0\DesignPatterns\Structural\DataMapper\UserMapper;
use PHPUnit\Framework\TestCase;

class DataMapperTest extends TestCase
{
    public function testCanMapUserFromStorage() {
        $storage = new StorageAdapter([
           1 => [
               'username' => 'johnDoe',
               'email'      => 'john.doe@email.com'
           ]
        ]);

        $mapper  = new  UserMapper($storage);

        $user = $mapper->findById(1);

        $this->assertInstanceOf(User::class, $user);
    }

    public function testWillNotMapInvalidData() {
        $this->expectException(InvalidArgumentException::class);

        $storage = new StorageAdapter([]);
        $mapper = new UserMapper($storage);

        $mapper->findById(1);
    }
}