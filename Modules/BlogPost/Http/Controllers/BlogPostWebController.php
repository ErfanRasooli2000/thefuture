<?php

namespace Api\BlogPost\Http\Controllers;

use Api\BlogPost\Models\BlogPost;
use App\Http\Controllers\Controller;

class BlogPostWebController extends Controller
{
    public function index()
    {
        $post = BlogPost::first();
        return view('blogPost::post' , compact('post'));
    }
}
