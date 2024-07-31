<?php

namespace Api\BlogPost\Http\Controllers;

use Api\BlogPost\Models\BlogPost;
use App\Http\Controllers\Controller;
use Modules\Comment\Enums\CommentStatusEnum;

class BlogPostWebController extends Controller
{
    public function index()
    {
        $posts = BlogPost::with(['categories' , 'creator'])->get();

        return view('blogPost::index', compact('posts'));
    }

    public function show(BlogPost $post)
    {
        $user = \Auth::guard('client')->check() ? \Auth::guard('client')->user() : null;

        $post->load(['creator' , 'comments.creator']);

        $comments = $this->sortComments($post->comments->where('status' , CommentStatusEnum::Approved->value));

        return view('blogPost::post' , compact('post' , 'comments' , 'user'));
    }

    private function sortComments($comments , $parent = null)
    {
        $subs = $comments->where('answer_to' , $parent);

        $sortedComments = collect();

        foreach ($subs as $sub)
        {
            $sub->comments = $this->sortComments($comments,$sub->id);
            $sortedComments->push($sub);
        }

        return $sortedComments;
    }
}
