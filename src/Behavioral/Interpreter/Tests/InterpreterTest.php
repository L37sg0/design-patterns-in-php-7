<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Interpreter\Tests;

use L37sg0\DesignPatterns\Behavioral\Interpreter\AndExpression;
use L37sg0\DesignPatterns\Behavioral\Interpreter\Context;
use L37sg0\DesignPatterns\Behavioral\Interpreter\OrExpression;
use L37sg0\DesignPatterns\Behavioral\Interpreter\VariableExpression;
use PHPUnit\Framework\TestCase;

class InterpreterTest extends TestCase
{
    private Context $context;
    private VariableExpression $a;
    private VariableExpression $b;
    private VariableExpression $c;

    public function setUp(): void {
        $this->context  = new Context();
        $this->a = new VariableExpression('A');
        $this->b = new VariableExpression('B');
        $this->c = new VariableExpression('C');
    }

    public function testOr() {
        $this->context->assign($this->a, false);
        $this->context->assign($this->b, false);
        $this->context->assign($this->c, true);

        // A || B
        $exp1       = new OrExpression($this->a, $this->b);
        $result1    = $exp1->interpret($this->context);

        $this->assertFalse($result1, 'A || B must false');

        // exp1 || C
        $exp2       = new OrExpression($exp1, $this->c);
        $result2    = $exp2->interpret($this->context);

        $this->assertTrue($result2, 'exp1 || C must true');
    }

    public function testAnd() {
        $this->context->assign($this->a, true);
        $this->context->assign($this->b, true);
        $this->context->assign($this->c, false);

        // A && B
        $exp1 = new AndExpression($this->a, $this->b);
        $result1 = $exp1->interpret($this->context);

        $this->assertTrue($result1, 'A && B must true');

        // exp1 && C
        $exp2 = new AndExpression($exp1, $this->c);
        $result2 = $exp2->interpret($this->context);

        $this->assertFalse($result2, 'exp1 && C must false');
    }
}