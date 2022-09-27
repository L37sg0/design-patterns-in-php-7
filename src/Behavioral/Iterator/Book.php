<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Iterator;

class Book
{
    private string $author;
    private string $title;

    public function __construct(string $author, string $title) {
        $this->author   = $author;
        $this->title    = $title;
    }

    public function getAuthor(): string {
        return $this->author;
    }

    public function getTitle(): string {
        return $this->title;
    }

    public function getAuthorAndTitle(): string {
        return $this->getTitle() . ' by ' . $this->getAuthor();
    }
}