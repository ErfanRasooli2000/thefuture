<?php

use Api\User\Http\Controllers\UserController;

Route::middleware('auth:sanctum')->group(function (){

    Route::get('get-user-data' , [UserController::class, 'getUserData']);

    Route::get('index' , [UserController::class, 'index']);
    Route::get('show/{user}' , [UserController::class, 'show']);
    Route::post('create' , [UserController::class, 'create']);
    Route::post('update/{user}' , [UserController::class, 'update']);
});

