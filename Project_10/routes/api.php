<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Api\PostApiController;

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

Route::get('/posts', [PostApiController::class, 'index']);
Route::post('/posts', [PostApiController::class, 'store']);
Route::get('/posts/{id}', [PostApiController::class, 'show']);
Route::put('/posts/{id}', [PostApiController::class, 'update']);
Route::delete('/posts/{id}', [PostApiController::class, 'destroy']);
