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
        Schema::create('operator', function (Blueprint $table) {
            $table->id();
            $table->unsignedBigInteger('id_users');
            $table->foreign('id_users')->references('id')->on('users');
            $table->string('nama_depan');
            $table->string('nama_belakang');
            $table->string('alamat');
            $table->string('tanggal_lahir');
            $table->string('telepon');
            $table->string('nip');
            $table->enum('jenis_kelamin', ['perempuan', 'laki_laki']);
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::table('operator', function (Blueprint $table) {
            $table->dropForeign('operator_id_users_foreign');
            $table->dropColumn('id_users');
        });
        Schema::dropIfExists('operator');
    }
};
