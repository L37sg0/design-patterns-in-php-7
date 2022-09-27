<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\More\EAV;

use SplObjectStorage;

class Entity
{
    /**
     * @var SplObjectStorage<Value,Value>
     */
    private $values;

    private string $name;

    /**
     * @param string $name
     * @param Value[] $values
     */
    public function __construct(string $name, array $values) {
        $this->name     = $name;

        $this->values = new SplObjectStorage();

        foreach ($values as $value) {
            $this->values->attach($value);
        }
    }

    public function __toString(): string
    {
        $text = [$this->name];

        foreach ($this->values as $value) {
            $text[] = (string) $value;
        }

        return join(', ', $text);
    }
}