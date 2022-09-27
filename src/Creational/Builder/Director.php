<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Creational\Builder;

use L37sg0\DesignPatterns\Creational\Builder\Parts\Venicle;

/** Director is part of the builder pattern. It knows the interface of the builder
 * and builds a complex object with the help of the builder.
 *
 * You can also inject many builders instead of one to build more complex objects.
 */
class Director
{
    public function build(Builder $builder): Venicle {
        $builder->createVenicle();
        $builder->addDoors();
        $builder->addEngine();
        $builder->addWheel();

        return $builder->getVenicle();
    }
}