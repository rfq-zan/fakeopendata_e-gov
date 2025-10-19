<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController; // Assuming this handles dashboard, login, logout, settings
// You will likely want separate controllers for Datasets and Users for better organization
 use App\Http\Controllers\Admin\DatasetController;
 use App\Http\Controllers\Admin\UserController;


// Public Routes
    Route::get('/', function () {
        return view('public.home');
    })->name('home');

    Route::get('/datasets', function () {
        return view('public.datasets');
    });

    Route::get('/visualizations', function () {
        return view('public.visualizations');
    });

    Route::get('/apidocs', function () {
        return view('public.apidocs');
    });

    Route::get('/about', function () {
        return view('public.about');
    });


// Admin Routes
Route::prefix('admin')->name('admin.')->group(function () {

    Route::get('/login', [AdminController::class, 'showLoginForm'])->name('login');
    Route::post('/login', [AdminController::class, 'login'])->name('login.submit');

   Route::middleware(['admin'])->group(function () {

        Route::get('/dashboard', [AdminController::class, 'index'])->name('dashboard');

        Route::get('/datasets', [AdminController::class, 'datasets'])->name('datasets.index');

        Route::get('/users', [AdminController::class, 'users'])->name('users.index');

        Route::get('/settings', [AdminController::class, 'settings'])->name('settings');

        Route::post('/logout', [AdminController::class, 'logout'])->name('logout');
    });
});
