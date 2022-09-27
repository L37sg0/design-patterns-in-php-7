<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\DependencyInjection;

class DatabaseConnection
{
    private DatabaseConfiguration $configuration;

    public function __construct(DatabaseConfiguration $configuration) {
        $this->configuration = $configuration;
    }

    public function getDsn(): string {
        // This is just for the sake of demonstration, not a real DSN.
        // Notice that only the injected config is used here, so there is
        // a real separation of concerns here

        return sprintf(
          '%s:%s@%s:%d',
          $this->configuration->getUsername(),
          $this->configuration->getPassword(),
          $this->configuration->getHost(),
          $this->configuration->getPort()
        );
    }
}