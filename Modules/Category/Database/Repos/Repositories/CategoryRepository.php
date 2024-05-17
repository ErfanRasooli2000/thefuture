<?php

namespace Api\Category\Database\Repos\Repositories;

use Api\Category\Database\Repos\Contracts\CategoryRepositoryInterface;
use Api\Category\Models\Category;
use Illuminate\Http\Request;

class CategoryRepository implements CategoryRepositoryInterface
{

    public function __construct(
        protected Category $model
    ){}

    public function getAllWithPagination(Request $request): mixed
    {
        return $this->model
            ->newQuery()
            ->with(['creator'])
            ->when($request->get('name') , function ($q , $value){
                $q->where('name' , "like" , "%$value%");
            })
            ->paginate(20);
    }

    public function create(array $inputs): mixed
    {
        return $this->model
                ->newQuery()
                ->create($inputs);
    }

    public function update(array $inputs, Category $category): mixed
    {
        return $category
            ->update($inputs);
    }

    public function delete(Category $category): bool
    {
        return $category->delete();
    }

    public function forSelect(): mixed
    {
        return $this->model
            ->newQuery()
            ->select(['id' , 'name'])
            ->get();
    }

    public function forShowHeader(): mixed
    {
        return $this->model
            ->newQuery()
            ->with(['childs.childs'])
            ->where('parent_id' , null)
            ->get();
    }
}
