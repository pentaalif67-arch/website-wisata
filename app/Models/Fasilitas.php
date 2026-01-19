<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Fasilitas extends Model
{
    protected $table = 'fasilitas';

    protected $fillable = [
        'nama',
        'kategori',
        'deskripsi',
        'alamat',
        'telepon',
        'harga_permalam',
        'kapasitas',
        'jarak_km',
        'rating',
        'fasilitas',
        'foto',
        'website'
    ];
}
