<?php

namespace Api\Comment\Http\Controllers;

use Api\BlogPost\Models\BlogPost;
use Api\Comment\Database\Repos\Contracts\CommentRepositoryInterface;
use Api\Comment\Http\Requests\CommentChangeStatusRequest;
use Api\Comment\Http\Resources\CommentShowResource;
use Api\Comment\Models\Comment;
use App\Http\Controllers\Controller;
use App\Traits\ApiResponse;
use Illuminate\Http\Request;

class CommentController extends Controller
{
    use ApiResponse;

    public function __construct(
        protected CommentRepositoryInterface $commentRepository
    ){}

    public function index(Request $request)
    {
        $result = $this->commentRepository->getAllWithPagination($request);

        return $this->successResponse();
    }

    public function show(Comment $comment)
    {
        return new CommentShowResource($comment);
    }

    public function changeStatus(Comment $comment,CommentChangeStatusRequest $request)
    {
        $inputs = $request->validated();

        $this->commentRepository->changeStatus($comment , $inputs);

        return $this->successResponse();
    }
}
