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
        Schema::create('pemesanan_tikets', function (Blueprint $table) {
            $table->id();
            $table->foreignId('user_id')->constrained()->onDelete('cascade');
            $table->foreignId('destinasi_id')->constrained('destinasis')->onDelete('cascade');
            $table->string('kode_pemesanan')->unique();
            $table->date('tanggal_kunjungan');
            $table->integer('jumlah_tiket');
            $table->decimal('total_harga', 10, 2);
            $table->enum('status', ['pending', 'confirmed', 'cancelled'])->default('pending');
            $table->string('nama_pemesan');
            $table->string('email_pemesan');
            $table->string('no_telepon')->nullable();
            $table->text('catatan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pemesanan_tikets');
    }
};
