<?php

use Api\BlogPost\Http\Controllers\BlogPostController;
use Illuminate\Support\Facades\Route;

Route::get('index' , [BlogPostController::class , 'index']);
Route::get('show/{blogPost}' , [BlogPostController::class , 'show']);
Route::post('create' , [BlogPostController::class , 'create']);
Route::post('update/{blogPost}' , [BlogPostController::class , 'update']);
Route::delete('delete/{blogPost}' , [BlogPostController::class , 'delete']);
Route::get('restore/{id}' , [BlogPostController::class , 'restore']);
