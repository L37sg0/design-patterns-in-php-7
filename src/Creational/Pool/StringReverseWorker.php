<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Creational\Pool;

use DateTime;

class StringReverseWorker
{
    private $createdAt;

    public function __construct() {
        $this->createdAt = date(DateTime::ISO8601);
    }

    public function run(string $text): string {
        return strrev($text);
    }
}