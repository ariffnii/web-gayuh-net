<?php

namespace Database\Seeders;

use App\Models\PaketInternet;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class PaketInternetSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        PaketInternet::create([
            'nama_paket' => 'Unlimited 50mbps',
            'kecepatan_download' => '50mbps',
            'kecepatan_upload' => '20mbps',
            'biaya_pasang' => '500000',
            'harga' => '650000',
            'deskripsi' => 'Unlimited Internet Up To 50mbps',
        ]);
    }
}
