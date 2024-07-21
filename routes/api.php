<?php

use App\Http\Controllers\users\ApiUsersLoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
// // Route::group('');
Route::post('/users/login', [ApiUsersLoginController::class, 'login']);
Route::post('/users/logout', [ApiUsersLoginController::class, 'logout'])->middleware('auth:sanctum');
// Route::get('/courses', [CoursesController::class, 'index'])->middleware('auth:sanctum');
// Route::get('/courses/:slug', [CoursesController::class, 'show'])->middleware('auth:sanctum');

