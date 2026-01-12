<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Destinasi extends Model
{
    use HasFactory;

    protected $fillable = [
        'nama',
        'slug',
        'deskripsi',
        'deskripsi_lengkap',
        'gambar',
        'gambar_tambahan',
        'rating',
        'jumlah_ulasan',
        'lokasi',
        'harga_tiket',
        'jam_buka',
        'jam_tutup',
        'fasilitas',
        'kategori',
        'maps_link',
        'kontak',
    ];

    protected $casts = [
        'gambar_tambahan' => 'array',
        'fasilitas' => 'array',
    ];
}
