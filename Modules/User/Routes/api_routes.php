<?php

use Api\User\Http\Controllers\UserController;

Route::middleware('auth:sanctum')->group(function (){

    Route::get('get-user-data' , [UserController::class, 'getUserData']);

});

