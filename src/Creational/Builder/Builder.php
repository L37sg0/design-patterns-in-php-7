<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Creational\Builder;

use L37sg0\DesignPatterns\Creational\Builder\Parts\Venicle;

interface Builder
{
    public function createVenicle(): void;

    public function addWheel(): void;

    public function addEngine(): void;

    public function addDoors(): void;

    public function getVenicle(): Venicle;
}