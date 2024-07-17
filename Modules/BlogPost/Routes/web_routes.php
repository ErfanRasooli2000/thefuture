<?php

Route::get('/show/{blogPost}' , [\Api\BlogPost\Http\Controllers\BlogPostWebController::class , 'show']);
