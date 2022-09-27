<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\DataMapper;

use InvalidArgumentException;

class UserMapper
{
    private StorageAdapter $adapter;

    public function __construct(StorageAdapter $adapter) {
        $this->adapter = $adapter;
    }

    /**
     * Finds a user from storage based on ID and returns a User object located
     * in memory. Normally this kind of logic will be implemented using the Repository pattern.
     * However the important part is in mapRowToUser() bellow, that will create a business object from the
     * data fetched from storage.
     * @param int $id
     * @return User
     */
    public function findById(int $id): User {
        $result = $this->adapter->find($id);

        if ($result === null) {
            throw new InvalidArgumentException("User #$id not found");
        }

        return $this->mapRowToUser($result);
    }

    private function mapRowToUser(array $row): User {
        return User::fromState($row);
    }
}