<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\ChainOfResponsibilities;

interface RequestInterface
{
    public function getUri();

    public function getPath();

    public function getQuery();

    public function getMethod();
}