<?php

namespace Api\Comment\Database\Repos\Repositories;

use Api\Comment\Database\Repos\Contracts\CommentRepositoryInterface;
use Api\Comment\Models\Comment;
use Illuminate\Http\Request;
use Illuminate\Support\Collection;

class CommentRepository implements CommentRepositoryInterface
{
    public function getAllWithPagination(Request $request) :Collection
    {
        return collect();
    }

    public function changeStatus(Comment $comment , $inputs): bool
    {
        return $comment->update([
            'status' => $inputs['type']
        ]);
    }
}
