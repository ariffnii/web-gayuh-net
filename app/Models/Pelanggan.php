<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;

class Pelanggan extends Model
{
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "pelanggan";
    protected $primaryKey ="id";
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'nama_depan',
        'nama_belakang',
        'alamat',
        'tanggal_lahir',
        'telepon',
        'jenis_kelamin',
        'foto_profil',
    ];

    public function pengaduan(): HasMany
    {
        return $this->hasMany(Pengaduan::class);
    }
    public function langganan(): HasOne{
        return $this->hasOne(Langganan::class);
    }
    public function transaksi(): HasOne{
        return $this->hasOne(Transaksi::class);
    }
    public function peningkatan_kecepatan(): HasOne{
        return $this->hasOne(PeningkatanKecepatan::class);
    }
    public function detail_pemasangan(): HasOne{
        return $this->hasOne(DetailPemasangan::class);
    }
}
