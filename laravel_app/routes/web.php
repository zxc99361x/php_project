<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::get('/test', [App\Http\Controllers\TestController::class, 'index']);

Route::get('/hello', function () {
    return view('Hello Laravel');
});
Route::get('welcome',function (){
    return view('welcome');
});

Route::get('/posts', [App\Http\Controllers\PostController::class, 'index']);

Route::get('/db-posts', [App\Http\Controllers\PostController::class, 'showPosts']);

Route::get('/post/create', [App\Http\Controllers\PostController::class, 'create']);
Route::post('/post', [App\Http\Controllers\PostController::class, 'store']);
Route::get('/admin', function () {
    return '這是管理頁面';
})->middleware('auth');

