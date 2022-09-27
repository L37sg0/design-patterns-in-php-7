<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\More\Repository;

use InvalidArgumentException;

/**
 * Like PostId, this is a value object which holds the value of the current status of a Post. It can be considered
 * either from a string or int and is able to validate itself. An instance can then be converted back to int or string.
 */
class PostStatus
{
    public const STATE_DRAFT_ID     = 1;
    public const STATE_PUBLISHED_ID = 2;

    public const STATE_DRAFT        = 'draft';
    public const STATE_PUBLISHED    = 'published';

    static private array $validStates = [
        self::STATE_DRAFT_ID        => self::STATE_DRAFT,
        self::STATE_PUBLISHED_ID    => self::STATE_PUBLISHED
    ];

    private int $id;
    private string $name;

    private function __construct(int $id, string $name) {
        $this->id   = $id;
        $this->name = $name;
    }

    static private function ensureIsValidId(int $status) {
        if (!in_array($status, array_keys(self::$validStates), true)) {
            throw new InvalidArgumentException('Invalid status id given');
        }
    }

    static private function ensureIsValidName(string $status) {
        if (!in_array($status, self::$validStates, true)) {
            throw new InvalidArgumentException('Invalid status name given');
        }
    }

    static public function fromInt(int $statusId)
    {
        self::ensureIsValidId($statusId);
        return new self($statusId, self::$validStates[$statusId]);
    }

    static public function fromString(string $status)
    {
        self::ensureIsValidName($status);
        $state = array_search($status, self::$validStates);

        if ($state === false) {
            throw new InvalidArgumentException('Invalid state given');
        }
        return new self($state, $status);
    }

    public function toInt(): int {
        return $this->id;
    }

    /**
     * Reason for avoiding use "__toString()" is, it operates outside of the stack in PHP
     * and is therefor not able to operate well with exceptions.
     */
    public function toString(): string {
        return $this->name;
    }
}