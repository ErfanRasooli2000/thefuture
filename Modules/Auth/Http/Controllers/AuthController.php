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

        if ($result['status'])
        {
            return $this->successResponse([
                'token' => $result['token']
            ])->withCookie($result['cookie']);
        }
        else
        {
            return $this->errorResponse($result['message'] , 403);
        }
    }

    public function logout()
    {
        $this->repository->logout();
        return $this->successResponse(null , 200 , 'با موفقیت خارج شدید');
    }
}
