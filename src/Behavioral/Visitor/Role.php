<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Visitor;

interface Role
{
    public function accept(RoleVisitor $visitor);
}