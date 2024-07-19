<?php

use Api\Client\Http\Controllers\ClientAuthController;


Route::prefix('page')->group(function(){

    Route::get('login', [ClientAuthController::class , 'loginPage'])->name('client.loginPage');
    Route::get('logout', [ClientAuthController::class , 'logout'])->middleware(['auth:client'])->name('client.logout');
});
