<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\AdapterWrapper;

/**
 * This is the adapter here. Notice it implements Book,
 * therefore you don't have to change the code of the client which is using a Book
 */
class EbookAdapter implements Book
{
    protected EBook $eBook;

    public function __construct(EBook $eBook) {
        $this->eBook = $eBook;
    }

    /**
     * Notice the adapter behavior here: Ebook::getPage() will return two integers, but Book
     * supports only a current page getter, so we adapt the behavior here.
     * @return int
     */
    public function getPage(): int
    {
        return $this->eBook->getPage()[0];
    }

    /**
     * This class makes the proper translation from one interface to another
     */
    public function open()
    {
        $this->eBook->unlock();
    }

    public function turnPage()
    {
        $this->eBook->pressNext();
    }
}