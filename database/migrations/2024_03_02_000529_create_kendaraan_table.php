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
        Schema::create('kendaraan', function (Blueprint $table) {
            $table->increments('id');
            $table->string('merk');
            $table->string('model');
            $table->string('warna');
            $table->string('nomor_polisi');
            $table->string('no_rangka');
            $table->string('no_masin');
            $table->string('scan_bpkb');
            $table->string('scan_stnk');
            $table->string('foto_ktp');
            $table->string('foto_kendaraan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('kendaraan');
    }
};
