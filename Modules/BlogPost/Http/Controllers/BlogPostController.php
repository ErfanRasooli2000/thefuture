<?php

namespace Api\BlogPost\Http\Controllers;

use Api\BlogPost\Database\Repos\Contracts\BlogPostRepositoryInterface;
use Api\BlogPost\Http\Requests\BlogPostCreateRequest;
use Api\BlogPost\Http\Requests\BlogPostUpdateRequest;
use Api\BlogPost\Http\Resources\FullBlogPostResource;
use Api\BlogPost\Http\Resources\SimpleBlogPostResource;
use Api\BlogPost\Models\BlogPost;
use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class BlogPostController extends Controller
{
    use ApiResponse;
    public function __construct(
        protected BlogPostRepositoryInterface $repository
    ){}

    public function index(Request $request)
    {
        $result = $this->repository->getAllWithPagination($request);
        $result = SimpleBlogPostResource::collection($result);

        return $this->successResponse($result , 200 , null , $result->response()->getData()->meta);
    }

    public function show(BlogPost $post)
    {
        return $this->successResponse(new FullBlogPostResource($post));
    }

    public function create(BlogPostCreateRequest $request)
    {
        $result = $this->repository->create($request->validated());
        return $this->successResponse(new FullBlogPostResource($result),200,'با موفقیت ساخته شد.');
    }

    public function update(BlogPost $post , BlogPostUpdateRequest $request)
    {
        $this->repository->update($post,$request->validated());
        return $this->successResponse(null,200,'با موفقیت به روز رسانی شد.');
    }

    public function delete(BlogPost $post)
    {
        $this->repository->delete($post);
        return $this->successResponse(null,200,'با موفقیت حذف شد.');
    }
}
