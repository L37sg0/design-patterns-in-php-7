<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Interpreter;

class OrExpression extends AbstractExpression
{
    private AbstractExpression $first;
    private AbstractExpression $second;

    public function __construct(AbstractExpression $first, AbstractExpression $second) {
        $this->first    = $first;
        $this->second   = $second;
    }

    public function interpret(Context $context): bool
    {
        return $this->first->interpret($context) || $this->second->interpret($context);
    }
}