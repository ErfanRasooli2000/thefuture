<?php

namespace Api\Comment\Http\Controllers;

use Api\BlogPost\Models\BlogPost;
use Api\Comment\Http\Requests\createCommentClientRequest;
use Api\Comment\Models\Comment;
use App\Http\Controllers\Controller;

class CommentClientController extends Controller
{
    public function create(createCommentClientRequest $request)
    {
        $inputs = $request->validated();

        Comment::create($inputs);

        return redirect()->back();
    }
}
