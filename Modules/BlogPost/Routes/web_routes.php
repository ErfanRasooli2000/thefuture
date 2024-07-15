<?php

Route::get('/' , [\Api\BlogPost\Http\Controllers\BlogPostWebController::class , 'index']);
