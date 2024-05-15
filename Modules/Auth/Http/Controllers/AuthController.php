<?php

namespace Api\Auth\Http\Controllers;

use Api\Auth\Database\Repos\Contracts\AuthPanelRepositoryInterface;
use Api\Auth\Http\Requests\AuthLoginRequest;
use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;

class AuthController extends Controller
{
    use ApiResponse;
    public function __construct(
        protected AuthPanelRepositoryInterface $repository
    ){}

    public function login(AuthLoginRequest $request)
    {
        $result = $this->repository->login($request->validated());
    }

    public function logout()
    {

    }
}
