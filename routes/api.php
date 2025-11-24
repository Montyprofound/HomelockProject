<?php

use App\Http\Controllers\ApiController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    Route::get('/services', [ApiController::class, 'getServices']);
    Route::get('/products', [ApiController::class, 'getProducts']);
    Route::post('/requests', [ApiController::class, 'submitRequest']);
});