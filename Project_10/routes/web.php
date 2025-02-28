<?php
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\TestController;
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


Route::get('/test', [App\Http\Controllers\TestController::class, 'index']);

Route::get('/hello', function () {
    return view('Hello Laravel');
});
Route::get('welcome',function (){
    return view('welcome');
});

Route::get('/db-posts', [App\Http\Controllers\PostController::class, 'showPosts']);

Route::get('/admin', function () {
    return '這是管理頁面';
})->middleware('auth');
Route::resource('posts', PostController::class);


