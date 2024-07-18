<?php

namespace Api\User\Database\Repos\Contracts;

use Api\User\Models\User;
use Illuminate\Http\Request;

interface UserRepositoryInterface
{
    public function getUserData(User $user) :array;

    public function getAllWithPagination(Request $request) :mixed;

    public function createUser(array $inputs) :void;
    public function updateUser(User $user , array $inputs) :void;
}
