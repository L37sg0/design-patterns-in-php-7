<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible;

use L37sg0\DesignPatterns\Behavioral\ChainOfResponsibilities\Handler;
use L37sg0\DesignPatterns\Behavioral\ChainOfResponsibilities\RequestInterface;

class SlowDatabaseHandler extends Handler
{

    public function append(Handler $handler)
    {
        // TODO: Implement append() method.
    }


    protected function processing(RequestInterface $request): ?string
    {
        // This is a mockup, in production code you would ask a slow (compared to in-memory ) DB for the results

        return 'Hello World!';
    }
}