<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\DataMapper;

class StorageAdapter
{
    private array $data;

    public function __construct(array $data) {
        $this->data = $data;
    }

    /**
     * @param int $id
     * @return mixed|null
     */
    public function find(int $id) {
        if (isset($this->data[$id])) {
            return $this->data[$id];
        }
        return null;
    }
}