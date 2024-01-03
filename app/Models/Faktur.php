<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Faktur extends Model
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "faktur";
    protected $primaryKey ="id";
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'tanggal_pembuatan',
        'tanggal_jatuh_tempo',
        'total_bayar',
    ];

    public function transaksi()
    {
        return $this->belongsTo(Transaksi::class, "id_transaksi");
    }
}
