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
        Schema::create('pelanggan', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users');
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('alamat');
            $table->date('tanggal_lahir');
            $table->string('telepon');
            $table->enum('jenis_kelamin', ['perempuan', 'laki_laki']);
            $table->string('foto_profil')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('pelanggan', function (Blueprint $table) {
            $table->dropForeign('pelanggan_id_users_foreign');
            $table->dropColumn('id_users');
        });
        Schema::dropIfExists('pelanggan');
    }
};
