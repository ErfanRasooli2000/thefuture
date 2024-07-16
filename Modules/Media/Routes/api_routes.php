<?php

use Api\Media\Http\Controllers\MediaController;

Route::get('gallery-images-list' , [MediaController::class , 'galleryImagesList'])->withoutMiddleware('auth:sanctum');
Route::post('upload-multiple-images' , [MediaController::class, 'uploadMultipleImages']);
