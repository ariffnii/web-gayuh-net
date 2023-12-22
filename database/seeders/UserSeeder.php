<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Operator',
            'email' => 'operator@gmail.com',
            'password' => Hash::make('operator123'),
            'akses' => 'operator',
            'email_verified_at' => now(),
        ]);
        User::create([
            'name' => 'Admin',
            'email' => 'admin@gmail.com',
            'password' => Hash::make('admin123'),
            'akses' => 'admin',
            'email_verified_at' => now(),
        ]);
        User::create([
            'name' => 'macha',
            'email' => 'macha@gmail.com',
            'password' => Hash::make('macha123'),
            'akses' => 'pelanggan',
            'email_verified_at' => now(),
        ]);
    }
}
