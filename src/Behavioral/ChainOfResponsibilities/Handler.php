<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\ChainOfResponsibilities;

abstract class Handler
{
    private ?Handler $successor;

    public function __construct(Handler $successor = null) {
        $this->successor = $successor;
    }

    abstract public function append(Handler $handler);

    /**
     * This approach by using a template method pattern ensures you that
     * each subclass will not forget to call the successor
     */
    final public function handle(RequestInterface $request): ?string {
        $processed = $this->processing($request);

        if ($processed === null && $this->successor !== null) {
            // the request has not been processed by this handler => see the next
            $processed = $this->successor->handle($request);
        }

        return $processed;
    }

    abstract protected function processing(RequestInterface $request): ?string;
}