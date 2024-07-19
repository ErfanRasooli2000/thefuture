<?php

use Api\Client\Http\Controllers\ClientAuthController;
use Api\Client\Http\Controllers\ClientController;


Route::prefix('page')->group(function(){

    Route::get('login', [ClientAuthController::class , 'loginPage'])->name('client.loginPage');
    Route::get('logout', [ClientAuthController::class , 'logout'])->middleware(['auth:client'])->name('client.logout');

    Route::get('edit-profile', [ClientController::class , 'editProfile'])->middleware(['auth:client'])->name('client.profile.edit');
    Route::post('update-profile', [ClientController::class , 'updateProfile'])->middleware(['auth:client'])->name('client.profile.update');
});
