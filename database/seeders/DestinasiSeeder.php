<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class DestinasiSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('destinasis')->insert([
            [
                'nama_destinasi' => 'Pantai Parangtritis',
                'kategori' => 'Pantai',
                'alamat' => 'Jalan Pantai Parangtritis, Gunungkidul',
                'telepon' => '(0274) 2xxxx',
                'email' => 'info@parangtritis.example',
                'jam_buka' => '07:30:00',
                'jam_tutup' => '17:00:00',
                'harga_tiket' => 10000.00,
                'latitude' => -8.0856,
                'longitude' => 110.2528,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'nama_destinasi' => 'Malioboro',
                'kategori' => 'Budaya',
                'alamat' => 'Jalan Malioboro, Yogyakarta',
                'telepon' => '(0274) 2yyyy',
                'email' => 'info@malioboro.example',
                'jam_buka' => '09:00:00',
                'jam_tutup' => '21:00:00',
                'harga_tiket' => 0.00,
                'latitude' => -7.7956,
                'longitude' => 110.3695,
                'created_at' => now(),
                'updated_at' => now(),
            ],
        ]);
    }
}
