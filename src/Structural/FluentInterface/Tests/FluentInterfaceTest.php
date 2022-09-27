<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\FluentInterface\Tests;

use L37sg0\DesignPatterns\Structural\FluentInterface\Sql;
use PHPUnit\Framework\TestCase;

class FluentInterfaceTest extends TestCase
{
    public function testBuildSQL() {
        $query = (new Sql())
            ->select(['foo', 'bar'])
            ->from('foobar', 'f')
            ->where('f.bar = ?');
        print($query);
        $this->assertSame('SELECT foo, bar FROM foobar AS f WHERE f.bar = ?', (string) $query);
    }
}