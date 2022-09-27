<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Iterator;

use Countable;

class BookList implements Countable
{
    /** @var Book[] $books */
    private array $books = [];

    private int $currentIndex = 0;

    public function getBook(int $bookNumber): ?Book {
        if (array_key_exists($bookNumber, $this->books)) {
            return $this->books[$bookNumber];
        }
        return null;
    }

    public function addBook(Book $book) {
        $this->books[] = $book;
    }

    public function removeBook(Book $bookToRemove) {
        foreach ($this->books as $key => $book) {
            if ($book->getAuthorAndTitle() === $bookToRemove->getAuthorAndTitle()) {
                unset($this->books[$key]);
            }
        }
        $this->books = array_values($this->books);
    }

    public function count(): int
    {
        return count($this->books);
    }

    public function current(): Book {
        return $this->books[$this->currentIndex];
    }

    public function key(): int {
        return $this->currentIndex;
    }

    public function next() {
        $this->currentIndex++;
    }

    public function rewind() {
        $this->currentIndex = 0;
    }

    public function valid(): bool {
        return isset($this->books[$this->currentIndex]);
    }

    public function getBooks(): array {
        return $this->books;
    }
}