<?php

use Api\Comment\Http\Controllers\CommentController;
use Illuminate\Support\Facades\Route;

Route::get('index' , [CommentController::class , 'index']);
Route::get('show/{comment}' , [CommentController::class , 'show']);
Route::post('change-status' , [CommentController::class , 'changeStatus']);

