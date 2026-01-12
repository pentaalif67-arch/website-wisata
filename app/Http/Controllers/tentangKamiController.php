<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class TentangKamiController extends Controller
{
    /**
     * Tampilkan halaman tentang kami
     */
    public function index()
    {
        $data = [
            'title' => 'Tentang Kami - Wisata Jember',
            'description' => 'Platform informasi wisata terpercaya di Kabupaten Jember',
            'teamMembers' => [
                ['name' => 'John Doe', 'position' => 'Founder & CEO', 'bio' => 'Pecinta alam Jember sejak kecil'],
                ['name' => 'Jane Smith', 'position' => 'Content Creator', 'bio' => 'Ahli dalam fotografi dan penulisan perjalanan'],
                ['name' => 'Bob Johnson', 'position' => 'Developer', 'bio' => 'Mengembangkan platform teknologi untuk pariwisata'],
            ],
            'mission' => 'Mempromosikan keindahan alam Jember kepada dunia',
            'vision' => 'Menjadi platform referensi utama untuk informasi wisata di Jember',
            'contact' => [
                'email' => 'info@wisatajember.com',
                'phone' => '+62 812 3456 7890',
                'address' => 'Jl. Raya Jember No. 123, Kabupaten Jember, Jawa Timur'
            ]
        ];

        return view('dashboard.tentangKami', $data);
    }
}