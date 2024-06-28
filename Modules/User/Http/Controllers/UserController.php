<?php

namespace Api\User\Http\Controllers;

use Api\User\Database\Repos\Contracts\UserRepositoryInterface;
use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;

class UserController extends Controller
{
    use ApiResponse;
    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index()
    {

    }

    public function show()
    {

    }

    public function create()
    {

    }
    public function update()
    {

    }

    public function delete()
    {

    }

    public function getUserData()
    {
        $user = \Auth::user();
        $data = $this->repository->getUserData($user);
        return $this->successResponse($data);
    }
}
