<?php

namespace App\Models;

use App\Models\Pelanggan;
use App\Models\PaketInternet;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Transaksi extends Model
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "transaksi";
    protected $primaryKey ="id";
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'tanggal_transaksi',
        'metode_pembayaran',
        'bukti_transaksi',
    ];

    public function faktur(): HasOne
    {
        return $this->hasOne(Faktur::class, "id_transaksi");
    }
    public function detail_pemasangan()
    {
        return $this->belongsTo(DetailPemasangan::class, "id_pemasangan");
    }
    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, "id_pelanggan");
    }

}
