<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Iterator;

class BookListIterator
{
    protected BookList $bookList;

    protected Book $currentBook;

    public function __construct(BookList $bookList)
    {
        $this->bookList = $bookList;
    }

    public function current() {

    }

    public function next() {

    }

    public function key() {

    }

    public function valid() {

    }

    public function rewind() {

    }
}