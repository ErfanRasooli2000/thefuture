<?php

namespace Api\Category\Database\Repos\Contracts;

use Api\Category\Models\Category;
use Illuminate\Http\Request;

interface CategoryRepositoryInterface
{
    public function getAllWithPagination(Request $request) :mixed;

    public function create(array $inputs) :mixed;

    public function update(array $inputs , Category $category) :mixed;

    public function delete(Category $category) :bool;

    public function forSelect() :mixed;

    public function forShowHeader() :mixed;
}
