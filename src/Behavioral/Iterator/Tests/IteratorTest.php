<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Iterator\Tests;

use L37sg0\DesignPatterns\Behavioral\Iterator\Book;
use L37sg0\DesignPatterns\Behavioral\Iterator\BookList;
use PHPUnit\Framework\TestCase;

class IteratorTest extends TestCase
{
    public function testCanIterateOverBookList() {
        $bookList = new BookList();
        $bookList->addBook(new Book('William Sanders', 'Learning PHP Design Patterns'));
        $bookList->addBook(new Book('Aaron Saray', 'Professional Php Design Patterns'));
        $bookList->addBook(new Book('Robert C. Martin', 'Clean Code'));

        $books = [];
        /** @var Book $book */
        foreach ($bookList->getBooks() as $book) {
            $books[] = $book->getAuthorAndTitle();
        }
        $this->assertSame([
            'Learning PHP Design Patterns by William Sanders',
            'Professional Php Design Patterns by Aaron Saray',
            'Clean Code by Robert C. Martin'
        ], $books);
    }

    public function testCanIterateOverBookListAfterRemovingBook() {
        $book   = new Book('Robert C. Martin', 'Clean Code');
        $book2  = new Book('Aaron Saray', 'Professional Php Design Patterns');

        $bookList = new BookList();
        $bookList->addBook($book);
        $bookList->addBook($book2);
        $bookList->removeBook($book);

        $books = [];
        /** @var Book $book */
        foreach ($bookList->getBooks() as $book) {
            $books[] = $book->getAuthorAndTitle();
        }
        $this->assertSame(['Professional Php Design Patterns by Aaron Saray'], $books);
    }

    public function testCanAddBookToList() {
        $book = new Book('Robert C. Martin', 'Clean Code');

        $bookList = new BookList();
        $bookList->addBook($book);

        $this->assertCount(1, $bookList);
    }

    public function testCanRemoveBookFromList() {
        $book = new Book('Robert C. Martin', 'Clean Code');

        $bookList = new BookList();
        $bookList->addBook($book);
        $bookList->removeBook($book);

        $this->assertCount(0, $bookList);
    }
}