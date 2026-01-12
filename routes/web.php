<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\KontakController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', function () {
    return view('dashboard.index');
})->name('dashboard');

// Dashboard Routes (Protected)
Route::middleware(['auth', 'verified'])->group(function () {
    // Destinasi Routes
    Route::get('/dashboard/destinasi', [DestinasiController::class, 'index'])->name('destinasi.index');
    Route::get('/dashboard/destinasi/create', [DestinasiController::class, 'create'])->name('destinasi.create');
    Route::post('/dashboard/destinasi/store', [DestinasiController::class, 'store'])->name('destinasi.store');
    Route::delete('/destinasi/{id}', [DestinasiController::class, 'destroy'])->name('destinasi.destroy');
    Route::get('/dashboard/destinasi/edit/{id}', [DestinasiController::class, 'edit'])->name('destinasi.edit');
    Route::put('/dashboard/destinasi/update/{id}', [DestinasiController::class, 'update'])->name('destinasi.update');

    // Fasilitas Routes
    Route::get('/dashboard/fasilitas', function () {
        return view('dashboard.fasilitas');
    })->name('fasilitas.index');

    // Galeri Routes
    Route::get('/dashboard/galeri', function () {
        return view('dashboard.galeri');
    })->name('galeri.index');

    // Tentang Kami Routes
    Route::get('/dashboard/tentangKami', [TentangKamiController::class, 'index'])->name('tentangKami.index');

    // Profile Routes
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Public Routes
Route::get('/dashboard/kontak', function () {
    return view('dashboard.kontak');
})->name('kontak.index');

Route::post('/dashboard/kontak', function () {
    // Handle contact form submission
    return back()->with('success', 'Pesan Anda telah dikirim. Terima kasih!');
})->name('kontak.kirim');

Route::get('/wisata', function () {
    return redirect()->route('destinasi.index');
})->name('wisata.index');

require __DIR__.'/auth.php';
