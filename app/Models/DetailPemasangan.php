<?php

namespace App\Models;

use App\Models\Pelanggan;
use App\Models\PaketInternet;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailPemasangan extends Model
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "detail_pemasangan";
    protected $primaryKey ="id";
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'tanggal_permintaan',
        'tanggal_pemasangan',
        'keterangan',
        'status',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, "id_pelanggan");
    }
    public function paketinternet()
    {
        return $this->belongsTo(PaketInternet::class, "id_paket_internet");
    }
    public function transaksi(): HasOne
    {
        return $this->hasOne(Transaksi::class, "id_pemasangan");
    }
}
