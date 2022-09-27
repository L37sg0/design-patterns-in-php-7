<?php

namespace L37sg0\DesignPatterns\Behavioral\ChainOfResponsibilities;

interface UriInterface
{
    public function getPath();

    public function getQuery();
}