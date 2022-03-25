<?php
use App\Http\Controllers\Hotel\HotelController;

Route::group(['prefix' => '/hotel'], function () {
        Route::get('/view', [HotelController::class, 'showAll'])->name('hotel-list');

        Route::get('/detail', [HotelController::class, 'showDetail'])->name('hotel-detail');
    });