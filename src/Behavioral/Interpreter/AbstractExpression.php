<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Interpreter;

abstract class AbstractExpression
{
    abstract public function interpret(Context $context): bool;
}