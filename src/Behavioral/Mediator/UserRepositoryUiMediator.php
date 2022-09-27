<?php

declare(strict_types=1);

namespace L37sg0\DesignPatterns\Behavioral\Mediator;

class UserRepositoryUiMediator implements Mediator
{
    private Ui $ui;
    private UserRepository $userRepository;

    public function __construct(UserRepository $userRepository, Ui $ui) {
        $this->userRepository   = $userRepository;
        $this->ui               = $ui;

        $this->userRepository->setMediator($this);
        $this->ui->setMediator($this);
    }

    public function printInfoAbout(string $user) {
        $this->ui->outputUserInfo($user);
    }

    public function getUser(string $username): string
    {
        return $this->userRepository->getUserName($username);
    }
}