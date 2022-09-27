<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Structural\DataMapper;

class User
{
    private string $email;

    private string $username;

    public function __construct(string $username, string $email) {
        $this->username = $username;
        $this->email    = $email;
    }

    public static function fromState(array $state): User {
        // Validate state before accessing keys!

        return new self(
            $state['username'],
            $state['email']
        );
    }

    public function getUsername():string {
        return $this->username;
    }

    public function getEmail(): string {
        return $this->email;
    }

}