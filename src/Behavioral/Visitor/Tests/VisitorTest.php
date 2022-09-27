<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Visitor\Tests;

use L37sg0\DesignPatterns\Behavioral\Visitor\RecordingVisitor;
use L37sg0\DesignPatterns\Behavioral\Visitor\User;
use L37sg0\DesignPatterns\Behavioral\Visitor\Group;
use L37sg0\DesignPatterns\Behavioral\Visitor\Role;
use PHPUnit\Framework\TestCase;

class VisitorTest extends TestCase
{
    private RecordingVisitor $visitor;

    protected function setUp(): void
    {
        $this->visitor = new RecordingVisitor();
    }

    public function provideRoles() {
        return [
            [new User('Sponge-Bob')],
            [new Group('DEV')],
        ];
    }

    /**
     * @dataProvider provideRoles
     */
    public function testVisitSomeRole(Role $role) {
        $role->accept($this->visitor);
        $this->assertSame($role, $this->visitor->getVisited()[0]);
    }
}