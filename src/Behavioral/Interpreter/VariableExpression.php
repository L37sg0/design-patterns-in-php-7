<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Interpreter;

class VariableExpression extends AbstractExpression
{
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function interpret(Context $context): bool
    {
        return $context->lookUp($this->name);
    }

    public function getName(): string {
        return $this->name;
    }
}