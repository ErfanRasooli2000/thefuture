<?php

use Api\Setting\Http\Controllers\SettingController;

Route::get('list' , [SettingController::class , 'list']);
Route::post('store' , [SettingController::class , 'store']);
