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
        Schema::create('faktur', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_transaksi');
            $table->foreign('id_transaksi')->references('id')->on('transaksi');
            $table->date('tanggal_pembuatan');
            $table->date('tanggal_jatuh_tempo');
            $table->integer('total_pembayaran');
            $table->enum('status_pembayaran', ['belum', 'sudah']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('faktur', function (Blueprint $table) {
            $table->dropForeign('faktur_id_transaksi_foreign');
            $table->dropColumn('id_transaksi');
        });
        Schema::dropIfExists('faktur');
    }
};
