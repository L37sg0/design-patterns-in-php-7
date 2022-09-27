<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Command;

/**
 * Receiver is a secific service with its own contract and can be only concrete.
 */
class Receiver
{
    private bool $enableDate = false;

    /**
     * @var string[]
     */
    private array $output = [];

    public function write(string $str) {
        if ($this->enableDate) {
            $str .= ' [' . date('Y-m-d') . ']';
        }

        $this->output[] = $str;
    }

    /**
     * Enable receiver to display message date.
     * @return void
     */
    public function enableDate() {
        $this->enableDate = true;
    }

    /**
     * Disable receiver to display message date.
     * @return void
     */
    public function disableDate() {
        $this->enableDate = false;
    }

    public function getOutput(): string {
        return join("\n", $this->output);
    }
}