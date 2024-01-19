<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\JangkauanInternet;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class JangkauanSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        JangkauanInternet::create([
            'nama_kelurahan' => 'Jurumudi',
            'ketersediaan_internet' => 'YA'
        ]);
        JangkauanInternet::create([
            'nama_kelurahan' => 'Poris',
            'ketersediaan_internet' => 'YA'
        ]);
        JangkauanInternet::create([
            'nama_kelurahan' => 'Poris Plawad',
            'ketersediaan_internet' => 'TIDAK'
        ]);
    }
}
