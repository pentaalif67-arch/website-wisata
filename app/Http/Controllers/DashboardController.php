<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class DashboardController extends Controller
{
    /**
     * Menampilkan halaman dashboard utama
     */
    public function index()
    {
        // Statistik utama diambil dari database
        $jumlahDestinasi = DB::table('destinasis')->count();
        $jumlahFasilitas = DB::table('fasilitas')->count();

        // Galeri saat ini menggabungkan 6 data default + destinasi yang ada
        $defaultGaleriCount = 6;
        $jumlahGaleri = $defaultGaleriCount + $jumlahDestinasi;

        // Total tiket terjual berdasarkan pemesanan yang sudah dikonfirmasi
        $totalTiketTerjual = DB::table('pemesanan_tikets')
            ->where('status', 'confirmed')
            ->sum('jumlah_tiket');

        // Jika belum ada yang dikonfirmasi, tampilkan total semua pemesanan
        if ($totalTiketTerjual === 0) {
            $totalTiketTerjual = DB::table('pemesanan_tikets')->sum('jumlah_tiket');
        }

        $statistik = [
            'jumlahDestinasi' => $jumlahDestinasi,
            'jumlahFasilitas' => $jumlahFasilitas,
            'jumlahGaleri' => $jumlahGaleri,
            'totalTiketTerjual' => $totalTiketTerjual,
        ];

        // Destinasi populer Jember
        $destinasiPopuler = [
            [
                'nama' => 'Pantai Papuma',
                'lokasi' => 'Jember, Jawa Timur',
                'gambar' => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
                'rating' => 4.5
            ],
            [
                'nama' => 'Kawasan Gunung Pasang',
                'lokasi' => 'Jember, Jawa Timur',
                'gambar' => 'https://images.unsplash.com/photo-1454496522488-7a8e488e8606?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2076&q=80',
                'rating' => 4.2
            ],
            [
                'nama' => 'Teluk Love',
                'lokasi' => 'Jember, Jawa Timur', 
                'gambar' => 'https://images.unsplash.com/photo-1505142468610-359e7d316be0?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2076&q=80',
                'rating' => 4.7
            ],
            [
                'nama' => 'Puncak Rembangan',
                'lokasi' => 'Jember, Jawa Timur',
                'gambar' => 'https://images.unsplash.com/photo-1464822759844-4c0a1e8d5d7a?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=2070&q=80',
                'rating' => 4.3
            ]
        ];

        // Aktivitas terbaru
        $aktivitasTerbaru = [
            [
                'icon' => 'ticket-alt',
                'title' => 'Tiket baru terjual',
                'time' => '5 menit yang lalu'
            ],
            [
                'icon' => 'user-plus', 
                'title' => 'Pengunjung baru terdaftar',
                'time' => '1 jam yang lalu'
            ],
            [
                'icon' => 'map-marker-alt',
                'title' => 'Destinasi baru ditambahkan',
                'time' => '2 jam yang lalu'
            ],
            [
                'icon' => 'star',
                'title' => 'Ulasan baru diterima',
                'time' => '5 jam yang lalu'
            ]
        ];

        return view('dashboard.index', compact('statistik', 'destinasiPopuler', 'aktivitasTerbaru'));
    }

    /**
     * API untuk mendapatkan data statistik
     */
    public function getStatistik(Request $request)
    {
        $periode = $request->get('periode', '7hari');
        
        // Data dummy untuk grafik (nanti bisa dari database)
        $statistik = [
            'labels' => ['Sen', 'Sel', 'Rab', 'Kam', 'Jum', 'Sab', 'Min'],
            'pengunjung' => [120, 150, 90, 180, 130, 200, 170],
            'tiket' => [45, 60, 35, 75, 50, 85, 65]
        ];

        return response()->json($statistik);
    }
}