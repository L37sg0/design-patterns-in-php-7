<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\More\EAV\Tests;

use L37sg0\DesignPatterns\More\EAV\Attribute;
use L37sg0\DesignPatterns\More\EAV\Entity;
use L37sg0\DesignPatterns\More\EAV\Value;
use PHPUnit\Framework\TestCase;

class EAVTest extends TestCase
{
    public function testCanAddAttributeToEntity(): void {
        $colorAttribute = new Attribute('color');
        $colorSilver    = new Value($colorAttribute, 'silver');
        $colorBlack     = new Value($colorAttribute, 'black');

        $memoryAttribute    = new Attribute('memory');
        $memory8Gb          = new Value($memoryAttribute, '8GB');

        $entity = new Entity('MacBook Pro', [
            $colorSilver,
            $colorBlack,
            $memory8Gb
        ]);

        $this->assertEquals('MacBook Pro, color: silver, color: black, memory: 8GB', (string) $entity);
    }
}