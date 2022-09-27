<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\More\Repository;

use InvalidArgumentException;

/**
 * This is perfect example of a value object that is identifiable by its value alone and
 * is guaranteed to be valid each time an instance is created. Another important property of value objects
 * is immutability.
 *
 * Notice also the use of a named constructor (fromInt) which adds a little context when creating an instance.
 */
class PostId
{
    private int $id;

    private function __construct(int $id) {
        $this->id = $id;
    }

    static private function ensureIsValid(int $id) {
        if ($id <= 0) {
            throw new InvalidArgumentException('Invalid PostId given');
        }
    }

    static public function fromInt(int $id) {
        self::ensureIsValid($id);
        return new self($id);
    }

    public function toInt(): int {
        return $this->id;
    }
}