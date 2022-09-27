<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Creational\Prototype;

abstract class BookPrototype
{
    protected string $title;
    protected string $category;

    public abstract function __clone();

    final public function getTitle(): string {
        return $this->title;
    }

    final public function setTitle(string $title): void {
        $this->title = $title;
    }
}