<?php

namespace Api\User\Http\Controllers;

use Api\User\Database\Repos\Contracts\UserRepositoryInterface;
use Api\User\Http\Requests\CreateUserRequest;
use Api\User\Http\Requests\UpdateUserRequest;
use Api\User\Http\Resources\UserFullResource;
use Api\User\Http\Resources\UserResource;
use Api\User\Models\User;
use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class UserController extends Controller
{
    use ApiResponse;
    public function __construct(UserRepositoryInterface $repository)
    {
        $this->repository = $repository;
    }

    public function index(Request $request)
    {
        $result = UserResource::collection($this->repository->getAllWithPagination($request));

        return $this->successResponse($result ,200 , null , $result->response()->getData()->meta);
    }

    public function show(User $user)
    {
        $user->load('profile');
        return $this->successResponse(new UserFullResource($user));
    }

    /**
     * @param CreateUserRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function create(CreateUserRequest $request)
    {
        $this->repository->createUser($request->validated());

        return $this->successResponse(null , 201  , 'کاربر با موفقیت ساخته شد');
    }

    /**
     * @param User $user
     * @param UpdateUserRequest $request
     * @return \Illuminate\Http\JsonResponse
     */
    public function update(User $user,UpdateUserRequest $request)
    {
        $this->repository->updateUser($user,$request->validated());

        return $this->successResponse(null , 201  , 'کاربر با موفقیت ساخته شد');
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
