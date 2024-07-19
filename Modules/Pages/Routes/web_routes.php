<?php

use Api\Pages\Http\Controllers\HomeController;

Route::get('' , [HomeController::class , 'index'])->name('home');
