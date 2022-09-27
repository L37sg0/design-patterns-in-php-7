<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\FluentInterface;

class Sql
{
    private array $from = [];

    private array $where = [];

    private array $fields = [];

    public function select(array $fields): Sql {
        $this->fields = $fields;
        return $this;
    }

    public function from(string $table, string $alias): Sql {
        $this->from[] = $table . ' AS ' . $alias;
        return $this;
    }

    public function where(string $condition): Sql {
        $this->where[] = $condition;
        return $this;
    }

    public function __toString(): string {
        return sprintf(
            'SELECT %s FROM %s WHERE %s',
            join(', ', $this->fields),
            join(', ', $this->from),
            join(' AND ', $this->where)
        );
    }
}