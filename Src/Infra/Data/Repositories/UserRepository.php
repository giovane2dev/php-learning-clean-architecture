<?php

namespace Infra\Data\Repositories;

use Core\Entities\User;
use Core\Application\Interfaces\UserInterface;

class UserRepository implements UserInterface
{
    private $database;

    // contain abstraction to persist user data

    public function __construct()
    {
        $this->database = null;
    }

    public function find(int $id): User
    {
        return new User(1, 'Giovane', 'Pessoa', 'giovanepessoa@live.com');
    }

    public function add(User $user): void
    {
    }
}
