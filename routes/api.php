<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});

Route::post('register', [\App\Http\Controllers\Auth\RegisterController::class, 'register']);
Route::post('login', [\App\Http\Controllers\Auth\LoginController::class, 'login']);
Route::get('categories', [\App\Http\Controllers\CategoryController::class, 'index']);
Route::get('products', [\App\Http\Controllers\ProductController::class, 'index']);
