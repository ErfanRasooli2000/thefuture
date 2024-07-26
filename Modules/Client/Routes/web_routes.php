<?php

use Api\Client\Http\Controllers\ClientAuthController;
use Api\Client\Http\Controllers\ClientController;


Route::prefix('page')->group(function(){

    Route::get('login', [ClientAuthController::class , 'loginPage'])->name('client.loginPage');
    Route::get('logout', [ClientAuthController::class , 'logout'])->middleware(['auth:client'])->name('client.logout');


    Route::prefix('profile')->middleware('auth:client')->group(function(){
        Route::get('dashboard', [ClientController::class , 'dashboard'])->name('client.profile.dashboard');
        Route::get('courses', [ClientController::class , 'courses'])->name('client.profile.courses');
        Route::get('favourites', [ClientController::class , 'favourites'])->name('client.profile.favourites');
        Route::get('payments', [ClientController::class , 'payments'])->name('client.profile.payments');
        Route::get('comments', [ClientController::class , 'comments'])->name('client.profile.comments');
        Route::get('notifications', [ClientController::class , 'notifications'])->name('client.profile.notifications');
        Route::get('edit', [ClientController::class , 'editProfile'])->name('client.profile.edit');
        Route::post('update', [ClientController::class , 'updateProfile'])->name('client.profile.update');
    });

});
