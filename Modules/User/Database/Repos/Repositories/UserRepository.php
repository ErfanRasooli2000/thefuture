<?php

namespace Api\User\Database\Repos\Repositories;

use Api\User\Database\Repos\Contracts\UserRepositoryInterface;
use Api\User\Models\User;
use Api\User\Models\UserProfile;
use Illuminate\Http\Request;

class UserRepository implements UserRepositoryInterface
{
    public function __construct(protected User $model){}

    public function getUserData(User $user): array
    {
        return $user->toArray();
    }

    public function getAllWithPagination(Request $request): mixed
    {
        return $this->model->paginate(20);
    }

    public function createUser(array $inputs): void
    {
        \DB::transaction(function () use ($inputs) {

            $user = User::create([
                'name' => $inputs['name'],
                'username' => $inputs['username'],
                'email' => $inputs['email'],
                'password' => $inputs['password'],
            ]);

            $profile = UserProfile::create([
                'user_id' => $user->id,
                'biography' => $inputs['biography'],
                'birthday' => $inputs['birthday'],
                'mobile' => $inputs['mobile'],
                'gender' => $inputs['gender'],
            ]);

//            if ($inputs['resume'])
//                $profile->addMedia($inputs['resume'])->toMediaCollection('resume');
//
//            if ($inputs['profile'])
//                $profile->addMedia($inputs['profile'])->toMediaCollection('profile');
        });
    }

    public function updateUser(User $user, array $inputs): void
    {
        \DB::transaction(function () use ($user,$inputs) {
            $user->update([
                'name' => $inputs['name'],
                'username' => $inputs['username'],
                'email' => $inputs['email'],
            ]);

            $user->profile()->updateOrCreate(['user_id' => $user->id],[
                'biography' => $inputs['biography'],
                'birthday' => $inputs['birthday'],
                'mobile' => $inputs['mobile'],
                'gender' => $inputs['gender'],
            ]);
        });
    }
}
