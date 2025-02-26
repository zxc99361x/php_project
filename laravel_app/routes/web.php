<?php

use Illuminate\Support\Facades\Route;

Route::get('/test', [App\Http\Controllers\TestController::class, 'index']);

Route::get('/hello', function () {
    return view('Hello Laravel');
});
