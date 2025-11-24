<?php

use App\Http\Controllers\PageController;
use App\Http\Controllers\ProductController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;

// Public routes
Route::get('/', [PageController::class, 'home'])->name('home');
Route::get('/security', [PageController::class, 'security'])->name('security');
Route::get('/cleaning', [PageController::class, 'cleaning'])->name('cleaning');
Route::get('/fire-extinguishers', [ProductController::class, 'fireExtinguishers'])->name('fire-extinguishers');
Route::get('/contact', [PageController::class, 'contact'])->name('contact');
Route::post('/submit-request', [RequestController::class, 'store'])->name('submit-request');

// Auth routes
Auth::routes(['register' => false]);

// Admin routes
Route::prefix('admin')->middleware('auth')->group(function () {
    Route::get('/dashboard', [AdminController::class, 'dashboard'])->name('admin.dashboard');
    Route::get('/requests', [AdminController::class, 'requests'])->name('admin.requests');
    Route::get('/requests/{id}', [AdminController::class, 'showRequest'])->name('admin.request-details');
});

// Redirect /admin to dashboard
Route::get('/admin', function () {
    return redirect()->route('admin.dashboard');
});
