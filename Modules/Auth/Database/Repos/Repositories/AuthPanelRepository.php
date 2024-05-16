<?php

namespace Api\Auth\Database\Repos\Repositories;

use Api\Auth\Database\Repos\Contracts\AuthPanelRepositoryInterface;
use Api\User\Models\User;
use Illuminate\Support\Facades\Auth;

class AuthPanelRepository implements AuthPanelRepositoryInterface
{

    public function login(array $inputs): array
    {
        if(Auth::attempt($inputs))
        {
            $user = User::where('email' , $inputs['email'])->first();
            $token = $user->createToken('panel')->plainTextToken;
            $cookie = cookie('token' , $token , 60 * 24);

            return [
                'status' => true,
                'token' => $token,
                'cookie' => $cookie
            ];
        }
        else
        {
            return [
                'status' => false,
                'message' => "اطلاعات وارد شده صحیح نمی باشد."
            ];
        }
    }


    public function logout(): bool
    {
        $user = Auth::user();
        $user->currentAccessToken()->delete();
        cookie()->forget('token');
        return true;
    }
}
