<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use App\Models\Destinasi;
use App\Models\Fasilitas;

class GaleriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Hapus data galeri lama
        DB::table('galeri')->delete();

        // Ambil data destinasi
        $destinasi = Destinasi::all();
        foreach ($destinasi as $item) {
            DB::table('galeri')->insert([
                'judul' => $item->nama,
                'deskripsi' => $item->deskripsi,
                'kategori' => $item->kategori,
                'gambar' => $item->gambar,
                'destinasi_id' => $item->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }

        // Ambil data fasilitas
        $fasilitas = Fasilitas::all();
        foreach ($fasilitas as $item) {
            DB::table('galeri')->insert([
                'judul' => $item->nama,
                'deskripsi' => $item->deskripsi,
                'kategori' => $item->kategori,
                'gambar' => $item->gambar,
                'fasilitas_id' => $item->id,
                'created_at' => now(),
                'updated_at' => now(),
            ]);
        }
    }
}
