<?php

use Illuminate\Support\Facades\Route;


Route::middleware('api')->group(function () {
    Route::get('/hello', [\App\Http\Controllers\HelloController::class, 'hello']);
    Route::get('/sum', [\App\Http\Controllers\HelloController::class, 'sum']);
});

