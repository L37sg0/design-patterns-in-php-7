<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\More\ServiceLocator;

use InvalidArgumentException;

class ServiceLocator
{
    /**
     * @var string[][] $services
     */
    private array $services = [];

    /**
     * @var Service[] $instantiated
     */
    private array $instantiated = [];

    public function addInstance(string $class, Service $service) {
        $this->instantiated[$class] = $service;
    }

    public function addClass(string $class, array $params) {
        $this->services[$class] = $params;
    }

    public function has(string $interface): bool {
        return isset($this->services[$interface]) || isset($this->instantiated[$interface]);
    }

    public function get(string $class): Service {
        if (isset($this->instantiated[$class])) {
            return $this->instantiated[$class];
        }

        $object = new $class(...$this->services[$class]);

        if (!$object instanceof Service) {
            throw new InvalidArgumentException('Could not register service: is no instance of Service');
        }

        $this->instantiated[$class] = $object;
        return $object;
    }
}