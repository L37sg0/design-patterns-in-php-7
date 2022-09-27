<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\DependencyInjection;

class DatabaseConfiguration
{
    private string $password;

    private int $port;

    private string $host;

    private string $username;

    public function __construct(
        string $username,
        string $password,
        string $host,
        int $port
    ) {
        $this->username = $username;
        $this->password = $password;
        $this->host     = $host;
        $this->port     = $port;
    }

    public function getHost() {
        return $this->host;
    }

    public function getPort() {
        return $this->port;
    }

    public function getUsername() {
        return $this->username;
    }

    public function getPassword() {
        return $this->password;
    }
}