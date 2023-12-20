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
        Schema::create('pengaduan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pelanggan');
            $table->foreign('id_pelanggan')->references('id')->on('pelanggan');
            $table->enum('kategori', ['koneksi', 'gangguan', 'alat', 'lainnya']);
            $table->string('deskripsi');
            $table->enum('status', ['menunggu', 'proses', 'selesai']);
            $table->date('tanggal_penyelesaian');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pengaduan', function (Blueprint $table) {
            $table->dropForeign('pengaduan_id_pelanggan_foreign');
            $table->dropColumn('id_pelanggan');
        });
        Schema::dropIfExists('pengaduan');
    }
};
