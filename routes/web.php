<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\DestinasiController;
use App\Http\Controllers\FasilitasController;
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

    // Galeri Routes
    Route::get('/dashboard/galeri', function () {
        // Data galeri hardcoded (default)
        $defaultGaleri = [
            [
                'id' => 1,
                'judul' => 'Sunset di Pantai Papuma',
                'gambar' => 'https://wisatakita.com/pariwisata/532/800-Pantai-Papuma.jpeg',
                'kategori' => 'Pantai',
                'deskripsi' => 'Pemandangan sunset yang menakjubkan di Pantai Papuma',
                'created_at' => '2024-11-15'
            ],
            [
                'id' => 2,
                'judul' => 'Puncak Rembangan',
                'gambar' => 'https://turisian.com/wp-content/uploads/2023/02/Wisata-Puncak-Rembangan-Jember.jpg',
                'kategori' => 'Pegunungan',
                'deskripsi' => 'Pemandangan kota Jember dari ketinggian',
                'created_at' => '2024-11-10'
            ],
            [
                'id' => 3,
                'judul' => 'Air Terjun Tancak',
                'gambar' => 'https://turisian.com/wp-content/uploads/2023/01/Air-Terjun-Tancak-Jember.jpg',
                'kategori' => 'Air Terjun',
                'deskripsi' => 'Air terjun tertinggi di Jawa Timur',
                'created_at' => '2024-11-05'
            ],
            [
                'id' => 4,
                'judul' => 'Teluk Love',
                'gambar' => 'https://asset.kompas.com/crops/hHvbTRkW_5N7F3lcya3JQIHvuRA=/0x0:780x520/750x500/data/photo/2019/02/08/3228997686.jpg',
                'kategori' => 'Pantai',
                'deskripsi' => 'Teluk berbentuk hati yang romantis',
                'created_at' => '2024-11-01'
            ],
            [
                'id' => 5,
                'judul' => 'Kebun Teh Gunung Gambir',
                'gambar' => 'https://www.topwisata.info/wp-content/uploads/2019/03/kebun2Bteh2Bgunung2Bgambir.jpg',
                'kategori' => 'Perkebunan',
                'deskripsi' => 'Hamparan kebun teh yang hijau',
                'created_at' => '2024-10-28'
            ],
            [
                'id' => 6,
                'judul' => 'Pantai Watu Ulo',
                'gambar' => 'https://img.inews.co.id/media/600/files/networks/2022/11/22/388ae_pantai-watu-ulo.jpeg',
                'kategori' => 'Pantai',
                'deskripsi' => 'Pantai dengan batu besar berbentuk ular',
                'created_at' => '2024-10-25'
            ],
        ];

        // Data galeri dari database (destinasi baru)
        $dbGaleri = \Illuminate\Support\Facades\DB::table('destinasis')
            ->select('id', 'nama as judul', 'gambar', 'kategori', 'deskripsi', 'created_at')
            ->get()
            ->map(function ($item) {
                return [
                    'id' => $item->id + 1000, // Tambah offset agar ID unik
                    'judul' => $item->judul,
                    'gambar' => $item->gambar,
                    'kategori' => $item->kategori,
                    'deskripsi' => $item->deskripsi,
                    'created_at' => $item->created_at
                ];
            })->toArray();

        // Gabungkan data default dan database
        $galeri = array_merge($defaultGaleri, $dbGaleri);
        
        return view('dashboard.galeri', compact('galeri'));
    })->name('galeri.index');

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

require __DIR__.'/auth.php';
