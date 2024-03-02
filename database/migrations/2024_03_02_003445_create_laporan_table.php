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
        Schema::create('laporan', function (Blueprint $table) {
            $table->increments('id');
            $table->unsignedInteger('id_pelapor');
            $table->unsignedInteger('id_kendaraan');
            $table->string('no_laporan');
            $table->date('tanggal_laporan');
            $table->date('tanggal_hilang');
            $table->time('waktu_hilang');
            $table->text('deskripsi');
            $table->enum('status_laporan', ['belum diproses', 'proses', 'selesai'])->default('belum diproses');
            $table->timestamps();

            //relasi
            $table->foreign('id_pelapor')->references('id')->on('pelapor')->onDelete('cascade');
            $table->foreign('id_kendaraan')->references('id')->on('kendaraan')->onDelete('cascade');
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('laporan');
    }
};
