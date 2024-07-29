<?php

use Api\Comment\Http\Controllers\CommentClientController;

Route::post('create' , [CommentClientController::class , 'create'])->name('client.comment.create');
