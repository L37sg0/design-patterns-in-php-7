<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\NullObject;

class Service
{
    private Logger $logger;

    public function __construct(Logger $logger) {
        $this->logger = $logger;
    }

    public function doSomething() {
        // Notice here that you don't have to check if the logger is set with e.g. "is_null()", instead just use it.
        $this->logger->log('We are in ' . __METHOD__);
    }
}