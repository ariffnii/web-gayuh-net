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
        Schema::create('langganan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_pelanggan');
            $table->foreign('id_pelanggan')->references('id')->on('pelanggan');
            $table->unsignedBigInteger('id_paket_internet');
            $table->foreign('id_paket_internet')->references('id')->on('paket_internet');
            $table->enum('status', ['YA', 'TIDAK']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('langganan', function (Blueprint $table) {
            $table->dropForeign('langganan_id_pelanggan_foreign');
            $table->dropColumn('id_pelanggan');
            $table->dropForeign('langganan_id_paket_internet_foreign');
            $table->dropColumn('id_paket_internet');
        });
        Schema::dropIfExists('langganan');
    }
};
