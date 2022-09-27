<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Creational\Singleton;

use Exception;

class Singleton
{
    private static ?Singleton $instance = null;

    /**
     * It is not allowed to call from outside to prevent from creating multiple instances.
     * To use the singleton, you have to obtain the instance from Singleton::getInstance() instead.
     */
    private function __construct() {

    }

    /**
     * Gets the instance via lazy initialization (created on first usage)
     */
    public static function getInstance(): Singleton {
        if (self::$instance === null) {
            self::$instance = new self();
        }

        return self::$instance;
    }

    /**
     * Prevent the instance from being cloned (which would create a second instance of it).
     */
    private function __clone() {
        // TODO: Implement __clone() method.
    }

    /**
     * Prevent from being unserialized (which would create a second instance of it).
     */
    private function __wakeup() {
        throw new Exception("Cannot unserialize singleton");
    }
}