<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FasilitasController extends Controller
{
    /**
     * Menampilkan halaman fasilitas
     */
    public function index()
    {
        // Data statistik fasilitas
        $statistik = [
            'totalPenginapan' => 28,
            'totalRestoran' => 45,
            'totalTransportasi' => 15,
            'totalOlehOleh' => 32
        ];

        // Data fasilitas
        $fasilitas = [
            [
                'id' => 1,
                'nama' => 'Hotel Mutiara Jember',
                'kategori' => 'Penginapan',
                'gambar' => 'https://images.unsplash.com/photo-1566073771259-6a8506099945?auto=format&fit=crop&w=900&q=80',
                'deskripsi' => 'Hotel bintang 4 dengan fasilitas lengkap di pusat kota Jember. Cocok untuk bisnis dan liburan keluarga.',
                'rating' => 4.0,
                'alamat' => 'Jl. Gatot Subroto No. 123, Jember',
                'harga' => 'Rp 450.000 - Rp 1.200.000',
                'fasilitas' => ['Kolam Renang', 'Restoran', 'Spa', 'WiFi Gratis', 'Parkir Luas']
            ],
            [
                'id' => 2,
                'nama' => 'Restoran Laut Biru',
                'kategori' => 'Restoran',
                'gambar' => 'https://images.unsplash.com/photo-1517248135467-4c7edcad34c4?auto=format&fit=crop&w=900&q=80',
                'deskripsi' => 'Restoran seafood segar dengan pemandangan pantai. Menyajikan hidangan laut khas Jember.',
                'rating' => 4.5,
                'alamat' => 'Jl. Pantai Papuma No. 45, Jember',
                'harga' => 'Rp 50.000 - Rp 250.000',
                'fasilitas' => ['Pemandangan Laut', 'Live Music', 'Parkir', 'AC', 'WiFi']
            ],
            [
                'id' => 3,
                'nama' => 'Jember Car Rental',
                'kategori' => 'Transportasi',
                'gambar' => 'https://images.unsplash.com/photo-1549317661-bd32c8ce0db2?auto=format&fit=crop&w=900&q=80',
                'deskripsi' => 'Layanan rental mobil dengan berbagai pilihan kendaraan dan sopir profesional untuk keliling Jember.',
                'rating' => 4.2,
                'alamat' => 'Jl. Hayam Wuruk No. 78, Jember',
                'harga' => 'Rp 300.000 - Rp 800.000/hari',
                'fasilitas' => ['Sopir Profesional', 'Asuransi', 'Full Tank', 'Baby Seat', 'Tour Guide']
            ],
            [
                'id' => 4,
                'nama' => 'Toko Oleh-oleh Khas Jember',
                'kategori' => 'Oleh-oleh',
                'gambar' => 'https://images.unsplash.com/photo-1587132137056-6a17f48d202a?auto=format&fit=crop&w=900&q=80',
                'deskripsi' => 'Menjual berbagai oleh-oleh khas Jember seperti suwar-suwir, tape, dan kerajinan tangan lokal.',
                'rating' => 4.8,
                'alamat' => 'Jl. Sudirman No. 56, Jember',
                'harga' => 'Rp 10.000 - Rp 500.000',
                'fasilitas' => ['Packaging Cantik', 'Gratis Ongkir Lokal', 'Kualitas Terjamin', 'Banyak Pilihan', 'Harga Terjangkau']
            ],
            [
                'id' => 5,
                'nama' => 'Villa Papuma Beach',
                'kategori' => 'Penginapan',
                'gambar' => 'https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=900&q=80',
                'deskripsi' => 'Villa eksklusif dengan pemandangan langsung ke Pantai Papuma. Fasilitas privat dan mewah.',
                'rating' => 4.7,
                'alamat' => 'Kawasan Pantai Papuma, Jember',
                'harga' => 'Rp 800.000 - Rp 2.500.000',
                'fasilitas' => ['Private Pool', 'Butler Service', 'Beach Access', 'BBQ Area', 'Carport']
            ],
            [
                'id' => 6,
                'nama' => 'Warung Tahu Telur Jember',
                'kategori' => 'Restoran',
                'gambar' => 'https://images.unsplash.com/photo-1559339352-11d035aa65de?auto=format&fit=crop&w=900&q=80',
                'deskripsi' => 'Kuliner legendaris Jember dengan tahu telur yang khas. Tempat favorit wisatawan lokal maupun mancanegara.',
                'rating' => 4.9,
                'alamat' => 'Jl. Mastrip No. 34, Jember',
                'harga' => 'Rp 15.000 - Rp 40.000',
                'fasilitas' => ['Makanan Halal', 'Tempat Nyaman', 'Parkir Motor', 'Take Away', 'Harga Terjangkau']
            ]
        ];

        // UPDATE: return view ke folder dashboard
        return view('dashboard.fasilitas', compact('statistik', 'fasilitas'));
    }

    /**
     * Menampilkan detail fasilitas
     */
    public function show($id)
    {
        // Untuk sementara redirect ke index
        return redirect()->route('fasilitas.index');
    }
}