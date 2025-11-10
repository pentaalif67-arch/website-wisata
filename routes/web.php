<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\WisataController;
use App\Http\Controllers\LaporanController;

// Route untuk dashboard menggunakan Controller
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
Route::get('/', [DashboardController::class, 'index'])->name('home');

// Route API untuk data statistik
Route::get('/api/statistik', [DashboardController::class, 'getStatistik'])->name('api.statistik');

// Route untuk manajemen wisata
Route::resource('wisata', WisataController::class);

// Route untuk laporan
Route::prefix('laporan')->name('laporan.')->group(function () {
    Route::get('/', [LaporanController::class, 'index'])->name('index');
    Route::get('/generate', [LaporanController::class, 'generate'])->name('generate');
});