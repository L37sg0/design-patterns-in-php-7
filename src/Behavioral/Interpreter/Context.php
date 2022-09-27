<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Interpreter;

use Exception;

class Context
{
    private array $poolVariable;

    public function lookUp(string $name): bool {
        if (!key_exists($name, $this->poolVariable)) {
            throw new Exception("No existing variable: $name");
        }
        return $this->poolVariable[$name];
    }

    public function assign(VariableExpression $variable, bool $value) {
        $this->poolVariable[$variable->getName()] = $value;
    }
}