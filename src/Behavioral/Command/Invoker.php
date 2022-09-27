<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Command;

/**
 * Invoker is using the command given to it.
 * Example : an Application in SF2.
 */
class Invoker
{
    private Command $command;

    /**
     * In the invoker we find this kind of method for subscribing the command.
     * There can be also a stack, a list, a fixed set ...
     * @param Command $command
     * @return void
     */
    public function setCommand(Command $command) {
        $this->command = $command;
    }

    /**
     * Executes the command. The invoker is the same whatever is the command.
     * @return void
     */
    public function run() {
        $this->command->execute();
    }
}