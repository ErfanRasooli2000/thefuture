<?php

use Api\Auth\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('login' , [AuthController::class , 'login']);
Route::post('logout' , [AuthController::class , 'logout'])->middleware(['auth:sanctum']);

