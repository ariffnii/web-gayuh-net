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
        Schema::create('detail_pemasangan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pelanggan');
            $table->foreign('id_pelanggan')->references('id')->on('pelanggan');
            $table->unsignedBigInteger('id_paket_internet');
            $table->foreign('id_paket_internet')->references('id')->on('paket_internet');
            $table->date('tanggal_permintaan');
            $table->date('tanggal_pemasangan')->nullable();
            $table->string('keterangan');
            $table->enum('status', ['menunggu', 'proses', 'selesai']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('detail_pemasangan', function (Blueprint $table) {
            $table->dropForeign('detail_pemasangan_id_pelanggan_foreign');
            $table->dropColumn('id_pelanggan');
            $table->dropForeign('detail_pemasangan_id_paket_internet_foreign');
            $table->dropColumn('id_paket_internet');
        });
        Schema::dropIfExists('detail_pemasangan');
    }
};
