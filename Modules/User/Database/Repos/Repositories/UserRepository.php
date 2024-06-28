<?php

namespace Api\User\Database\Repos\Repositories;

use Api\User\Database\Repos\Contracts\UserRepositoryInterface;
use Api\User\Models\User;

class UserRepository implements UserRepositoryInterface
{
    public function getUserData(User $user): array
    {
        return $user->toArray();
    }
}
