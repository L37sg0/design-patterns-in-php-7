<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Visitor;

class RecordingVisitor implements RoleVisitor
{
    /**
     * @var Role[] $visited
     */
    private array $visited = [];

    public function visitUser(User $role)
    {
        $this->visited[] = $role;
    }

    public function visitGroup(Group $role)
    {
        $this->visited[] = $role;
    }

    /**
     * @return Role[]
     */
    public function getVisited(): array {
        return $this->visited;
    }
}