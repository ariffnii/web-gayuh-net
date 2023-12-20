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
            $table->unsignedBigInteger('id_operator');
            $table->foreign('id_operator')->references('id')->on('operator');
            $table->date('tanggal_pemasangan');
            $table->string('lokasi_instalasi');
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
            $table->dropForeign('detail_pemasangan_id_operator_foreign');
            $table->dropColumn('id_operator');
        });
        Schema::dropIfExists('detail_pemasangan');
    }
};
