<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DatasetController;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');

Route::get('/datasets', [DatasetController::class, 'apiIndex']);
Route::get('/datasets/{dataset}', [DatasetController::class, 'apiShow']);
