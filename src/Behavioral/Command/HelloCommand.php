<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Command;

/**
 * This concrete command calls "print" on the Receiver, but an external
 * invoker just knows that it can call "execute"
 */
class HelloCommand implements Command
{
    private Receiver $output;

    /**
     * Each concrete command is build with different receivers.
     * There can be one, many or completely no receivers, but there can be other commands in the parameters.
     * @param Receiver $output
     */
    public function __construct(Receiver $output)
    {
        $this->output = $output;
    }

    /**
     * Execute and output "Hello World".
     * @return void
     */
    public function execute()
    {
        // Sometimes, there is no receiver and this is the command which does all the work.
        $this->output->write('Hello World');
    }

}