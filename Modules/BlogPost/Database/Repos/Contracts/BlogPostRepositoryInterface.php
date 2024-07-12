<?php

namespace Api\BlogPost\Database\Repos\Contracts;

use Api\BlogPost\Models\BlogPost;
use Illuminate\Http\Request;

interface BlogPostRepositoryInterface
{
    /**
     * @param Request $request
     * @return mixed
     */
    public function getAllWithPagination(Request $request) :mixed;

    /**
     * @param array $inputs
     * @return BlogPost
     */
    public function create(array $inputs) :BlogPost;

    /**
     * @param BlogPost $post
     * @param array $inputs
     * @return bool
     */
    public function update(BlogPost $post ,array $inputs) :bool;

    /**
     * @param BlogPost $post
     * @return bool
     */
    public function delete(BlogPost $post) :mixed;

    /**
     * @param $id
     * @return mixed
     */
    public function restore($id) :mixed;
}
