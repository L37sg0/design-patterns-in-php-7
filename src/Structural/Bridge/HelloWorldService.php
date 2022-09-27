<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\Bridge;

class HelloWorldService extends Service
{

    public function get(): string
    {
        return $this->implementation->format('Hello World');
    }
}