<?php

use Api\Client\Http\Controllers\ClientAuthController;

Route::post('register-or-login' , [ClientAuthController::class , 'sendLoginCode'])->name('client.registerLogin')->middleware('throttle:6,1');
Route::post('do-login' , [ClientAuthController::class , 'login'])->name('client.doLogin')->middleware('throttle:6,1');
