<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Command;

interface Command
{
    /**
     * This is the most important method in the Command pattern,
     * the Receiver goes in the constructor.
     */
    public function execute();
}