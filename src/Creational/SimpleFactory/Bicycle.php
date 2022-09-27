<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Creational\SimpleFactory;

class Bicycle
{
    public function driveTo(string $destination) {
        echo "I'm going to " . $destination . '.';
    }
}