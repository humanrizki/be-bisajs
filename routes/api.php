<?php

use App\Http\Controllers\ContentCoursesController;
use App\Http\Controllers\CourseController;
use App\Http\Controllers\ImageModulesController;
use App\Http\Controllers\OauthController;
use App\Http\Controllers\users\ApiUsersLoginController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

Route::get('/user', function (Request $request) {
    return $request->user();
})->middleware('auth:sanctum');
// // Route::group('');
Route::post('/users/login', [ApiUsersLoginController::class, 'login']);
Route::post('/users/logout', [ApiUsersLoginController::class, 'logout'])->middleware('auth:sanctum');
Route::post('/users/register/oauth-google', [OauthController::class, 'registerGoogle']);
Route::post('/courses/content', [ContentCoursesController::class, 'saveContent']);
Route::get('/courses', [CourseController::class, 'index']);
Route::get('/course/{slug}', [CourseController::class, 'show']);
Route::post('/upload-image-module', [ImageModulesController::class, 'store']);
// Route::get('/courses/:slug', [CoursesController::class, 'show'])->middleware('auth:sanctum');

// Route::get('auth', [OauthController::class, 'redirectToProvider']);
// Route::get('auth/google', [OauthController::class, 'handleProviderCallback']);
