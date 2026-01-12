<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KontakController extends Controller
{
    /**
     * Tampilkan halaman kontak
     */
    public function index()
    {
        $data = [
            'title' => 'Kontak - Wisata Jember',
            'contact_info' => [
                'email' => 'info@wisatajember.com',
                'phone' => '+62 812 3456 7890',
                'whatsapp' => '+62 812 3456 7890',
                'address' => 'Jl. Raya Jember No. 123, Kabupaten Jember, Jawa Timur',
                'office_hours' => 'Senin - Jumat: 08:00 - 17:00 WIB'
            ],
            'social_media' => [
                ['icon' => 'fab fa-facebook', 'name' => 'Facebook', 'link' => '#', 'color' => '#1877F2'],
                ['icon' => 'fab fa-instagram', 'name' => 'Instagram', 'link' => '#', 'color' => '#E4405F'],
                ['icon' => 'fab fa-twitter', 'name' => 'Twitter', 'link' => '#', 'color' => '#1DA1F2'],
                ['icon' => 'fab fa-youtube', 'name' => 'YouTube', 'link' => '#', 'color' => '#FF0000'],
                ['icon' => 'fab fa-tiktok', 'name' => 'TikTok', 'link' => '#', 'color' => '#000000'],
            ],
            'faqs' => [
                [
                    'question' => 'Bagaimana cara memesan tiket melalui website ini?',
                    'answer' => 'Anda bisa memesan tiket langsung melalui halaman destinasi dengan menekan tombol "Pesan Tiket" pada destinasi yang Anda pilih.'
                ],
                [
                    'question' => 'Apakah ada biaya booking?',
                    'answer' => 'Tidak ada biaya booking tambahan. Anda hanya membayar harga tiket yang tertera.'
                ],
                [
                    'question' => 'Bagaimana cara membatalkan pemesanan?',
                    'answer' => 'Pembatalan bisa dilakukan melalui halaman "Pesanan Saya" atau menghubungi customer service kami.'
                ],
                [
                    'question' => 'Apakah tersedia panduan wisata?',
                    'answer' => 'Ya, kami menyediakan panduan wisata yang bisa diunduh dan juga menyediakan jasa pemandu wisata.'
                ],
            ]
        ];

        return view('dashboard.kontak', $data);
    }

    /**
     * Handle contact form submission
     */
    public function store(Request $request)
    {
        $validated = $request->validate([
            'name' => 'required|string|max:255',
            'email' => 'required|email|max:255',
            'phone' => 'nullable|string|max:20',
            'subject' => 'required|string|max:255',
            'message' => 'required|string|max:1000',
        ]);

        // Here you would typically:
        // 1. Save to database
        // 2. Send email notification
        // 3. Send confirmation email to user

        // For now, we'll just return success message
        return redirect()->back()->with('success', 'Pesan Anda telah berhasil dikirim. Kami akan membalas dalam 1x24 jam.');
    }
}