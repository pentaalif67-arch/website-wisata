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
        Schema::create('fasilitas', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->string('kategori'); // Hotel, Penginapan, RBNB, Wisma Resmi, Kost/Homestay
            $table->text('deskripsi');
            $table->string('alamat');
            $table->string('telepon');
            $table->integer('harga_permalam');
            $table->integer('kapasitas');
            $table->decimal('jarak_km', 5, 2);
            $table->string('rating')->default('4');
            $table->text('fasilitas')->nullable(); // AC, WiFi, TV, dll
            $table->string('foto')->nullable();
            $table->string('website')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('fasilitas');
    }
};
