<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GaleriController extends Controller
{
    /**
     * Menampilkan halaman galeri
     */
    public function index()
    {
        // Data galeri
        $galeri = [
            [
                'id' => 1,
                'judul' => 'Sunset di Pantai Papuma',
                'gambar' => 'https://images.unsplash.com/photo-1506905925346-21bda4d32df4?auto=format&fit=crop&w=900&q=80',
                'kategori' => 'Pantai',
                'deskripsi' => 'Pemandangan sunset yang menakjubkan di Pantai Papuma',
                'tanggal' => '15 November 2024'
            ],
            [
                'id' => 2,
                'judul' => 'Puncak Rembangan',
                'gambar' => 'https://images.unsplash.com/photo-1519817650390-64a93db511aa?auto=format&fit=crop&w=900&q=80',
                'kategori' => 'Pegunungan',
                'deskripsi' => 'Pemandangan kota Jember dari ketinggian',
                'tanggal' => '10 November 2024'
            ],
            [
                'id' => 3,
                'judul' => 'Air Terjun Tancak',
                'gambar' => 'https://images.unsplash.com/photo-1533055640609-24b498dfd1b1?auto=format&fit=crop&w=900&q=80',
                'kategori' => 'Air Terjun',
                'deskripsi' => 'Air terjun tertinggi di Jawa Timur',
                'tanggal' => '5 November 2024'
            ],
            [
                'id' => 4,
                'judul' => 'Teluk Love',
                'gambar' => 'https://images.unsplash.com/photo-1483683804023-6ccdb62f86ef?auto=format&fit=crop&w=900&q=80',
                'kategori' => 'Pantai',
                'deskripsi' => 'Teluk berbentuk hati yang romantis',
                'tanggal' => '1 November 2024'
            ],
            [
                'id' => 5,
                'judul' => 'Kebun Teh Gunung Gambir',
                'gambar' => 'https://images.unsplash.com/photo-1571863533956-01c88e79957e?auto=format&fit=crop&w=900&q=80',
                'kategori' => 'Perkebunan',
                'deskripsi' => 'Hamparan kebun teh yang hijau',
                'tanggal' => '28 Oktober 2024'
            ],
            [
                'id' => 6,
                'judul' => 'Pantai Watu Ulo',
                'gambar' => 'https://images.unsplash.com/photo-1544551763-46a013bb70d5?auto=format&fit=crop&w=900&q=80',
                'kategori' => 'Pantai',
                'deskripsi' => 'Pantai dengan batu besar berbentuk ular',
                'tanggal' => '25 Oktober 2024'
            ],
            [
                'id' => 7,
                'judul' => 'Taman Botani Sukorambi',
                'gambar' => 'https://images.unsplash.com/photo-1571896349842-33c89424de2d?auto=format&fit=crop&w=900&q=80',
                'kategori' => 'Wisata Keluarga',
                'deskripsi' => 'Taman rekreasi keluarga yang asri',
                'tanggal' => '20 Oktober 2024'
            ],
            [
                'id' => 8,
                'judul' => 'Curug Pelangi',
                'gambar' => 'https://images.unsplash.com/photo-1432405972618-c60b0225b8f9?auto=format&fit=crop&w=900&q=80',
                'kategori' => 'Air Terjun',
                'deskripsi' => 'Air terjun dengan pelangi yang indah',
                'tanggal' => '15 Oktober 2024'
            ],
            [
                'id' => 9,
                'judul' => 'Pemandangan Malam Jember',
                'gambar' => 'https://images.unsplash.com/photo-1519817650390-64a93db511aa?auto=format&fit=crop&w=900&q=80',
                'kategori' => 'Kota',
                'deskripsi' => 'Pemandangan kota Jember di malam hari',
                'tanggal' => '10 Oktober 2024'
            ]
        ];

        // Data kategori untuk filter
        $kategori = ['Semua', 'Pantai', 'Pegunungan', 'Air Terjun', 'Perkebunan', 'Wisata Keluarga', 'Kota'];

        return view('dashboard.galeri', compact('galeri', 'kategori'));
    }

    /**
     * Menampilkan detail galeri
     */
    public function show($id)
    {
        // Untuk sementara redirect ke index
        return redirect()->route('galeri.index');
    }
}