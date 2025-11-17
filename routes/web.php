<?php

use Illuminate\Support\Facades\Route;

Route::get('/welcome', function () {
    return view('welcome');
});
Route::resource('/', \App\Http\Controllers\AuthController::class);
Route::post('/auth/signInValidate', [\App\Http\Controllers\AuthController::class, 'signInValidate'])->name('login.submit');
Route::get('/auth/sign_out', [\App\Http\Controllers\AuthController::class, 'signOut']);
Route::get('/auth/getQuote', [\App\Http\Controllers\AuthController::class, 'getQuote']);
Route::post('/auth/sign_in', [\App\Http\Controllers\AuthController::class, 'signIn']);
// Content
Route::get('/content/dashboard', [\App\Http\Controllers\ContentController::class, 'dashboard'])->name('content.dashboard');
Route::get('/content/masterMerek', [\App\Http\Controllers\ContentController::class, 'masterMerek'])->name('content.masterMerek');
Route::get('/content/masterKategori', [\App\Http\Controllers\ContentController::class, 'masterKategori'])->name('content.masterKategori');
Route::get('/content/masterBarang', [\App\Http\Controllers\ContentController::class, 'masterBarang'])->name('content.masterBarang');
Route::get('/content/masterPengguna', [\App\Http\Controllers\ContentController::class, 'masterPengguna'])->name('content.masterPengguna');
Route::get('/content/transaksiMasuk', [\App\Http\Controllers\ContentController::class, 'transaksiMasuk'])->name('content.transaksiMasuk');
Route::get('/content/transaksiKeluar', [\App\Http\Controllers\ContentController::class, 'transaksiKeluar'])->name('content.transaksiKeluar');
Route::get('/content/laporanMasuk', [\App\Http\Controllers\ContentController::class, 'laporanMasuk'])->name('content.laporanMasuk');
Route::get('/content/laporanKeluar', [\App\Http\Controllers\ContentController::class, 'laporanKeluar'])->name('content.laporanKeluar');
Route::get('/content/laporanStokBarang', [\App\Http\Controllers\ContentController::class, 'laporanStokBarang'])->name('content.laporanStokBarang');