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
        $post->load('creator');
        return view('blogPost::post' , compact('post'));
    }
}
