<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Creational\StaticFactory;

use InvalidArgumentException;

/**
 * Note1: Remember, static means global state which is evil because it can be mocked for tests.
 * Note2: Cannot be subclassed or mok-upped or have multiple different instances.
 */
final class StaticFactory
{
    public static function factory(string $type): Formatter {
        switch ($type) {
            case 'number':
                return new FormatNumber();
            case 'string':
                return new FormatString();
            default:
                throw new InvalidArgumentException('Unknown format given');
        }

    }
}