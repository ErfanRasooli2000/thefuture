<?php

namespace Api\Setting\Http\Controllers;

use Api\Setting\Database\Repositories\Contracts\SettingRepositoryInterface;
use Api\Setting\Http\Requests\SettingRequest;
use Api\Setting\Http\Resources\SettingResource;
use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;

class SettingController extends Controller
{
    use ApiResponse;
    public function __construct(
        protected SettingRepositoryInterface $repository
    ){}

    public function list()
    {
        return $this->successResponse(
            SettingResource::collection($this->repository->getAll())
        );
    }

    public function store(SettingRequest $request)
    {
        $this->repository->saveAll($request->validated()['keys']);

        return $this->successResponse( null , 200 , 'با موفقیت ویرایش شد.');
    }
}
