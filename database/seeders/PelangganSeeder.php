<?php

namespace Database\Seeders;

use App\Models\Pelanggan;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Carbon;

class PelangganSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Pelanggan::create([
            'id_users' => '3',
            'nama_depan' => 'fakri',
            'nama_belakang' => 'cihuy',
            'alamat' => 'Benda',
            'tanggal_lahir' => Carbon::make('2000-11-3'),
            'telepon' => '0823123231',
            'jenis_kelamin' => 'L',
        ]);
    }
}
