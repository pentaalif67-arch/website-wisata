<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::table('galeri', function (Blueprint $table) {
            $table->string('judul')->nullable();
            $table->text('deskripsi')->nullable();
            $table->string('kategori')->nullable();
            $table->string('gambar')->nullable();
            $table->unsignedBigInteger('destinasi_id')->nullable();
            $table->unsignedBigInteger('fasilitas_id')->nullable();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('galeri', function (Blueprint $table) {
            $table->dropColumn(['judul', 'deskripsi', 'kategori', 'gambar', 'destinasi_id', 'fasilitas_id']);
        });
    }
};
