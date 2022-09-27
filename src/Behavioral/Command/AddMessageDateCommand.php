<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Command;

/**
 * This concrete command tweaks receiver to add current date to messages
 * invoker just knows that it can call "execute"
 */
class AddMessageDateCommand implements UndoableCommand
{
    private Receiver $output;

    /**
     * Each concrete command is built with different receivers.
     * There can be one, many or completely no receivers, but there can be other commands in the parameters.
     * @param Receiver $output
     */
    public function __construct(Receiver $output) {
        $this->output = $output;
    }

    /**
     * Execute and make receivers to enable displaying messages date.
     * @return void
     */
    public function execute()
    {
        // Sometimes, there is no receivers and this is the command which does all the work.
        $this->output->enableDate();
    }

    /**
     * Undo the command and make receivers to disable displaying messages date.
     * @return void
     */
    public function undo()
    {
        // Sometimes, there is no receiver and this is the command which does all the work.
        $this->output->disableDate();
    }
}