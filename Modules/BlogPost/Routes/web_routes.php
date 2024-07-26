<?php

use Api\BlogPost\Http\Controllers\BlogPostWebController;

Route::get('index' , [BlogPostWebController::class , 'index'])->name('blogPost.index');
Route::get('/show/{blogPost:slug}' , [BlogPostWebController::class , 'show'])->name('blogPost.show');
