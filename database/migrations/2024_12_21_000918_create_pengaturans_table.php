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
    { // Memasukkan Data Tabel ke dalam Database
        // php artisan migrate
        Schema::create('pengaturans', function (Blueprint $table) {
            $table->id();
            $table->date('tanggal');
            $table->string('lokasi');
            $table->string('kepada');
            $table->string('bon_faktur');
            $table->integer('banyak_barang');
            $table->enum('jenis_barang', ['lembar', 'rim']);
            $table->string('nama_barang');
            $table->integer('harga');
            $table->integer('jumlah');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('pengaturans');
    }
};
