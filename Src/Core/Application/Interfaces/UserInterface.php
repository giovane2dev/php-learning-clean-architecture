<?php

namespace Core\Application\Interfaces;

use Core\Entities\User;

// contain abstraction of user data persistence implementation

interface UserInterface
{
    public function find(int $id): User;
    public function add(User $user): void;
}
