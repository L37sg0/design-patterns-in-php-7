<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\AdapterWrapper\Tests;

use L37sg0\DesignPatterns\Structural\AdapterWrapper\EbookAdapter;
use L37sg0\DesignPatterns\Structural\AdapterWrapper\Kindle;
use L37sg0\DesignPatterns\Structural\AdapterWrapper\PaperBook;
use PHPUnit\Framework\TestCase;

class AdapterWrapperTest extends TestCase
{
    public function testCanTurnPageOnBook() {
        $book = new PaperBook();
        $book->open();
        $book->turnPage();

        $this->assertSame(2, $book->getPage());
    }

    public function testCanTurnPageOnKindleLikeInANormalBook() {
        $kindle = new Kindle();
        $book = new EbookAdapter($kindle);

        $book->open();
        $book->turnPage();

        $this->assertSame(2, $book->getPage());
    }
}