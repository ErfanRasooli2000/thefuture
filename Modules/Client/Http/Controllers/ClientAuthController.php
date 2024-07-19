<?php

namespace Api\Client\Http\Controllers;

use Api\Client\Database\Repos\Contracts\ClientAuthRepositoryInterface;
use Api\Client\Http\Requests\doLoginClientRequest;
use Api\Client\Http\Requests\UserLoginRequest;
use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use Illuminate\Support\Facades\Auth;

class ClientAuthController extends Controller
{
    use ApiResponse;
    public function __construct(
        protected ClientAuthRepositoryInterface $repository
    ){}

    public function loginPage()
    {
        return view('client::login');
    }

    public function sendLoginCode(UserLoginRequest $request)
    {
        $this->repository->loginSendCode($request->validated());

        return $this->successResponse(null , 200 , 'کد با موفقیت ارسال شد');
    }

    public function login(doLoginClientRequest $request)
    {
        $result = $this->repository->doLogin($request->validated());

        if ($result['status'])
        {
            $token = $result['client']->createToken('client-token')->plainTextToken;

            return $this->successResponse(['token' => $token] , 200 , 'کد با موفقیت ارسال شد');
        }

        return $this->errorResponse('اطلاعات وارد شده اشتباه است.');
    }

    public function logout()
    {
        Auth::guard('client')->user()->tokens()->delete();
        \Session::flush();

        return redirect()->route('home');
    }
}
