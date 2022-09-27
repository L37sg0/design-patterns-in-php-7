<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Visitor;

class Group implements Role
{
    private string $name;

    public function __construct(string $name) {
        $this->name = $name;
    }

    public function getName(): string {
        return sprintf('Group %s', $this->name);
    }

    public function accept(RoleVisitor $visitor)
    {
        $visitor->visitGroup($this);
    }
}