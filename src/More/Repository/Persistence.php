<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\More\Repository;

interface Persistence
{
    public function generateId(): int;

    public function retrieve(int $id): array;

    public function persist(array $data);

    public function delete(int $id);
}