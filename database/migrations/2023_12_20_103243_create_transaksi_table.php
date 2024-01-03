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
        Schema::create('transaksi', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_paket_internet');
            $table->foreign('id_paket_internet')->references('id')->on('paket_internet');
            $table->unsignedBigInteger('id_pelanggan');
            $table->foreign('id_pelanggan')->references('id')->on('pelanggan');
            $table->unsignedBigInteger('id_rekening');
            $table->foreign('id_rekening')->references('id')->on('rekening');
            $table->date('tanggal_transaksi');
            $table->enum('metode_pembayaran', ['cash', 'transfer']);
            $table->string('bukti_transaksi')->nullable();
            $table->integer('total_bayar');
            $table->enum('status_transaksi', ['proses', 'selesai']);
            $table->string('keterangan')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('transaksi', function (Blueprint $table) {
            $table->dropForeign('transaksi_id_paket_internet_foreign');
            $table->dropColumn('id_paket_internet');
            $table->dropForeign('transaksi_id_pelanggan_foreign');
            $table->dropColumn('id_pelanggan');
            $table->dropForeign('transaksi_id_rekening_foreign');
            $table->dropColumn('id_rekening');
        });
        Schema::dropIfExists('transaksi');
    }
};
