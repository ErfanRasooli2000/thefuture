<?php

namespace Api\BlogPost\Http\Controllers;

use Api\BlogPost\Models\BlogPost;
use App\Http\Controllers\Controller;

class BlogPostWebController extends Controller
{
    public function index()
    {
        $posts = BlogPost::all();
        return view('blogPost::index', compact('posts'));
    }

    public function show(BlogPost $post)
    {
        $post->load(['creator' , 'comments.creator']);

        $comments = $this->sortComments($post->comments);

        return view('blogPost::post' , compact('post' , 'comments'));
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
