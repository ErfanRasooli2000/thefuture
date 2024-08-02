<?php

namespace Api\Comment\Database\Repos\Contracts;

use Api\Comment\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

interface CommentRepositoryInterface
{
    public function getAllWithPagination(Request $request) :Collection;
    public function changeStatus(Comment $comment , $inputs) :bool;
}
