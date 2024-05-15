<?php

use Api\Auth\Http\Controllers\AuthController;
use Illuminate\Support\Facades\Route;

Route::post('login' , ['login',AuthController::class]);
Route::post('logout' , ['logout',AuthController::class]);
