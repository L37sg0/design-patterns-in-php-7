<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Visitor;

interface RoleVisitor
{
    public function visitUser(User $user);

    public function visitGroup(Group $group);
}