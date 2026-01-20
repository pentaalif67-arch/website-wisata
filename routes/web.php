<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\FasilitasController;
use App\Http\Controllers\GaleriController;
use App\Http\Controllers\TentangKamiController;
use App\Http\Controllers\KontakController;
use App\Http\Controllers\PemesananTiketController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return redirect()->route('dashboard');
});

Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// Dashboard Routes (Protected)
Route::middleware(['auth', 'verified'])->group(function () {
    // Destinasi Routes - Semua user bisa melihat
    Route::get('/dashboard/destinasi', [DestinasiController::class, 'index'])->name('destinasi.index');
    
    // Destinasi CRUD Routes - Hanya Admin
    Route::middleware(['admin'])->group(function () {
        Route::get('/dashboard/destinasi/create', [DestinasiController::class, 'create'])->name('destinasi.create');
        Route::post('/dashboard/destinasi/store', [DestinasiController::class, 'store'])->name('destinasi.store');
        Route::delete('/destinasi/{id}', [DestinasiController::class, 'destroy'])->name('destinasi.destroy');
        Route::get('/dashboard/destinasi/edit/{id}', [DestinasiController::class, 'edit'])->name('destinasi.edit');
        Route::put('/dashboard/destinasi/update/{id}', [DestinasiController::class, 'update'])->name('destinasi.update');
    });

    // Fasilitas Routes - Semua user bisa melihat
    Route::get('/dashboard/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas.index');
    
    // Fasilitas CRUD Routes - Hanya Admin
    Route::middleware(['admin'])->group(function () {
        Route::post('/dashboard/fasilitas/store', [FasilitasController::class, 'store'])->name('fasilitas.store');
        Route::put('/dashboard/fasilitas/update/{id}', [FasilitasController::class, 'update'])->name('fasilitas.update');
        Route::delete('/dashboard/fasilitas/delete/{id}', [FasilitasController::class, 'destroy'])->name('fasilitas.destroy');
    });

    // Galeri Routes - Semua user bisa melihat
    Route::get('/dashboard/galeri', [GaleriController::class, 'index'])->name('galeri.index');
    
    // Galeri CRUD Routes - Hanya Admin
    Route::middleware(['admin'])->group(function () {
        Route::post('/dashboard/galeri/store', [GaleriController::class, 'store'])->name('galeri.store');
        Route::put('/dashboard/galeri/update/{id}', [GaleriController::class, 'update'])->name('galeri.update');
        Route::delete('/dashboard/galeri/delete/{id}', [GaleriController::class, 'destroy'])->name('galeri.destroy');
    });

    // Tentang Kami Routes
    Route::get('/dashboard/tentangKami', [TentangKamiController::class, 'index'])->name('tentangKami.index');

    // Pemesanan Tiket Routes - Hanya untuk Pelanggan
    Route::get('/dashboard/pemesanan-tiket', [PemesananTiketController::class, 'index'])->name('pemesanan-tiket.index');
    Route::get('/dashboard/pemesanan-tiket/create/{destinasi_id}', [PemesananTiketController::class, 'create'])->name('pemesanan-tiket.create');
    Route::post('/dashboard/pemesanan-tiket/store', [PemesananTiketController::class, 'store'])->name('pemesanan-tiket.store');
    Route::get('/dashboard/pemesanan-tiket/{id}', [PemesananTiketController::class, 'show'])->name('pemesanan-tiket.show');
    Route::post('/dashboard/pemesanan-tiket/{id}/cancel', [PemesananTiketController::class, 'cancel'])->name('pemesanan-tiket.cancel');

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

// TEST ROUTE
Route::get('/test-galeri', function () {
    $galeri = \App\Models\Galeri::all();
    return response()->json([
        'count' => $galeri->count(),
        'first_item' => $galeri->first()?->getAttributes(),
        'all_count' => count($galeri),
    ]);
});

Route::get('/test-galeri-view', function () {
    $galeri = \App\Models\Galeri::all();
    $kategori = ['Semua', 'Pantai'];
    return view('dashboard.galeri', compact('galeri', 'kategori'));
});

require __DIR__.'/auth.php';
