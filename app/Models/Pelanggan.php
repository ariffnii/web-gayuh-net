<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelanggan extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $fillable = [
        'nama_depan',
        'nama_depan',
        'alamat',
        'tanggal_lahir',
        'telepon',
        'jenis_kelamin',
    ];

}
