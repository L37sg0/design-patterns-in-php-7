<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\ChainOfResponsibilities\Responsible;

use L37sg0\DesignPatterns\Behavioral\ChainOfResponsibilities\Handler;
use L37sg0\DesignPatterns\Behavioral\ChainOfResponsibilities\RequestInterface;

class HttpInMemoryCacheHandler extends Handler
{
    private array $data = [];

    public function __construct(array $data, ?Handler $successor = null) {
        $this->data = $data;
        parent::__construct($successor);
    }

    public function append(Handler $handler)
    {
        // TODO: Implement append() method.
    }

    protected function processing(RequestInterface $request): ?string
    {
        $key = sprintf(
            '%s?%s',
            $request->getUri()->getPath(),
            $request->getUri()->getQuery()
        );

        if ($request->getMethod() == 'GET' && isset($this->data[$key])) {
            return $this->data[$key];
        }
        return null;
    }
}