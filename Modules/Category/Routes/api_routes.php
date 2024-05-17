<?php

use Api\Category\Http\Controllers\CategoryController;

Route::get('index' , [CategoryController::class , 'index']);
Route::get('show/{category}' , [CategoryController::class , 'show']);
Route::post('create' , [CategoryController::class , 'create']);
Route::put('update/{category:id}' , [CategoryController::class , 'update']);
Route::delete('delete/{category}' , [CategoryController::class , 'delete']);
Route::get('get-for-header' , [CategoryController::class , 'headerShow'])->withoutMiddleware(['auth:sanctum']);
Route::get('get-for-select' , [CategoryController::class , 'getForSelect']);
