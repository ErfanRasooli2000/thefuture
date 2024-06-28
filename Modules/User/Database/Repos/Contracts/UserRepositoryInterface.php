<?php

namespace Api\User\Database\Repos\Contracts;

use Api\User\Models\User;

interface UserRepositoryInterface
{
    public function getUserData(User $user) :array;
}
