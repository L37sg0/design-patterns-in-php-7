<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\Flyweight;

use Countable;

class TextFactory implements Countable
{
    private array $charPool = [];

    public function count(): int {
        return count($this->charPool);
    }

    public function get(string $name): Text {
        if (!isset($this->charPool[$name])) {
            $this->charPool[$name] = $this->create($name);
        }

        return $this->charPool[$name];
    }

    private function create(string $name): Text {
        if (strlen($name) == 1) {
            return new Character($name);
        } else {
            return new Word($name);
        }
    }
}