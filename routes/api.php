<?php

use Illuminate\Support\Facades\Route;


Route::middleware('api')->group(function () {
    Route::get('/hello', [\App\Http\Controllers\HelloController::class, 'hello']);
    Route::get('/sum', [\App\Http\Controllers\HelloController::class, 'sum']);
    Route::post('/product/add', [\App\Http\Controllers\ProductController::class, 'add']);
    Route::post('/group/add', [\App\Http\Controllers\GroupController::class, 'add']);
    Route::get('/group', [\App\Http\Controllers\GroupController::class, 'getAll']);
});

