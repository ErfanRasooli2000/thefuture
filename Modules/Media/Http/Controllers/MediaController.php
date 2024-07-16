<?php

namespace Api\Media\Http\Controllers;

use Api\Media\Database\Repos\Contracts\MediaRepositoryInterface;
use Api\Media\Http\Requests\UploadMultipleImageRequest;
use Api\Media\Http\Resources\SimpleMediaResource;
use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;

class MediaController extends Controller
{
    use ApiResponse;

    public function __construct(protected MediaRepositoryInterface $repository){}

    public function uploadMultipleImages(UploadMultipleImageRequest $request)
    {
        $this->repository->uploadMultipleImage($request->validated());

        return $this->successResponse(null , 200 , 'با موفقیت آپلود شد.');
    }

    public function galleryImagesList()
    {
        $result = $this->repository->getGalleryImages();

        return $this->successResponse(SimpleMediaResource::collection($result));
    }
}
