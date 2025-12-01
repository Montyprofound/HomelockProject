<?php

use App\Http\Controllers\Api\ApiController;
use Illuminate\Support\Facades\Route;

Route::prefix('v1')->group(function () {
    // Public endpoints
    Route::get('/services', [ApiController::class, 'services']);
    Route::post('/requests', [ApiController::class, 'storeRequest']);
    Route::post('/login', [ApiController::class, 'login']);
    
    // Protected endpoints
    Route::middleware('auth:sanctum')->group(function () {
        Route::get('/admin/requests', [ApiController::class, 'getRequests']);
        Route::get('/admin/requests/{id}', [ApiController::class, 'getRequest']);
        Route::post('/logout', [ApiController::class, 'logout']);
    });
});