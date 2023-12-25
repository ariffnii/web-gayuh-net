<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PaketInternet extends Model
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "paket_internet";
    protected $primaryKey ="id";
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'nama_paket',
        'kecepatan_download',
        'kecepatan_upload',
        'biaya_pasang',
        'harga',
        'deskripsi',
    ];

    public function langganan(): HasOne
    {
        return $this->hasOne(Langganan::class);
    }
    public function transaksi(): HasOne
    {
        return $this->hasOne(Transaksi::class);
    }
    public function peningkatan_kecepatan(): HasOne
    {
        return $this->hasOne(PeningkatanKecepatan::class);
    }
}
