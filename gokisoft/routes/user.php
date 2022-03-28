<?php
use App\Http\Controllers\UserController;

Route::group(['prefix' => '/user'], function () {
        Route::get('/', [UserController::class, 'index'])->name('user-list');

        Route::get('/view', [UserController::class, 'view'])->name('user-view');

        Route::get('/edit', [UserController::class, 'edit'])->name('user-edit');

        Route::post('/post', [UserController::class, 'post'])->name('user-post');

        Route::post('/delete', [UserController::class, 'delete'])->name('user-delete');

        Route::post('/confirm-edit', [UserController::class, 'confirmEdit'])->name('user-confirm-edit');
    });