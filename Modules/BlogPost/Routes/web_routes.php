<?php

use Api\BlogPost\Http\Controllers\BlogPostWebController;

Route::get('/show/{blogPost:slug}' , [BlogPostWebController::class , 'show'])->name('blogPost.show');
