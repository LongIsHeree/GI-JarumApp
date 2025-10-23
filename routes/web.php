<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::resource('/', \App\Http\Controllers\AuthController::class);
Route::post('/auth/sign_in', [\App\Http\Controllers\AuthController::class, 'signIn'])->name('login.submit');
Route::get('/auth/sign_out', [\App\Http\Controllers\AuthController::class, 'signOut']);
Route::get('/auth/getQuote', [\App\Http\Controllers\AuthController::class, 'getQuote']);

// Content
Route::get('/content/dashboard', [\App\Http\Controllers\ContentController::class, 'dashboard'])->name('content.dashboard');
