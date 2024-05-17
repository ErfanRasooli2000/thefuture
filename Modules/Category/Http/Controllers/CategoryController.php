<?php

namespace Api\Category\Http\Controllers;

use Api\Category\Database\Repos\Contracts\CategoryRepositoryInterface;
use Api\Category\Http\Requests\CreateCategoryRequest;
use Api\Category\Http\Requests\UpdateCategoryRequest;
use Api\Category\Http\Resources\FullCategoryResource;
use Api\Category\Http\Resources\HeaderCategoryResource;
use Api\Category\Http\Resources\SelectCategoryResource;
use Api\Category\Http\Resources\SimpleCategoryResource;
use Api\Category\Models\Category;
use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    use ApiResponse;

    public function __construct(
        protected CategoryRepositoryInterface $categoryRepository,
    ){}

    public function index(Request $request)
    {
        $result = $this->categoryRepository->getAllWithPagination($request);
        $result = SimpleCategoryResource::collection($result);

        return $this->successResponse(
            $result,
            200,
            null,
            $result->response()->getData()->meta
        );
    }

    public function show(Category $category)
    {
        return $this->successResponse(new FullCategoryResource($category));
    }

    public function create(CreateCategoryRequest $request)
    {
        $data = $request->validated();

        $category = $this->categoryRepository->create($data);

        return $this->successResponse(new FullCategoryResource($category) , 200 , "با موفقیت ساخته شد.");
    }

    public function update(UpdateCategoryRequest $request , Category $category)
    {
        $data = $request->validated();

        $this->categoryRepository->update($data , $category);

        return $this->successResponse(new FullCategoryResource($category) , 200 , "با موفقیت ویرایش شد.");
    }

    public function delete(Category $category)
    {
        $this->categoryRepository->delete($category);

        return $this->successResponse(null , 200 , "با موفقیت حذف شد.");
    }

    public function getForSelect()
    {
        $result = $this->categoryRepository->forSelect();
        return $this->successResponse(
            SelectCategoryResource::collection($result)
        );
    }

    public function headerShow()
    {
        $result = $this->categoryRepository->forShowHeader();
        return $this->successResponse(
            HeaderCategoryResource::collection($result)
        );
    }
}
