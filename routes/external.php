<?php

use Illuminate\Support\Facades\Route;


Route::name('meiwa.')->domain('https://192.168.0.3/meiwa')->group(function () {
    Route::get('/production')
        ->name('production');

    Route::get('/master/login')
        ->name('master');
});



