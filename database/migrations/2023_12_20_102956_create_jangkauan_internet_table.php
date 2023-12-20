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
        Schema::create('jangkauan_internet', function (Blueprint $table) {
            $table->id();
            $table->string('nama_kelurahan');
            $table->enum('ketersediaan_internet', ['tersedia', 'tidak_tersedia']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('jangkauan_internet');
    }
};
