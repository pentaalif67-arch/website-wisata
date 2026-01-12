<?php
// database/migrations/2024_01_01_000000_create_destinasis_table.php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateDestinasisTable extends Migration
{
    public function up()
    {
        Schema::create('destinasis', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('slug')->unique();
            $table->text('deskripsi');
            $table->text('deskripsi_lengkap')->nullable();
            $table->string('gambar');
            $table->json('gambar_tambahan')->nullable();
            $table->decimal('rating', 3, 1)->default(0);
            $table->integer('jumlah_ulasan')->default(0);
            $table->text('lokasi');
            $table->decimal('harga_tiket', 10, 0)->default(0);
            $table->string('jam_buka');
            $table->string('jam_tutup');
            $table->json('fasilitas')->nullable();
            $table->string('kategori');
            $table->string('maps_link')->nullable();
            $table->string('kontak')->nullable();
            $table->timestamps();
        });
    }

    public function down()
    {
        Schema::dropIfExists('destinasis');
    }
}