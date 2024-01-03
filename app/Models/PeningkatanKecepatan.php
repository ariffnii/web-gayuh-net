<?php

namespace App\Models;

use App\Models\Pelanggan;
use App\Models\PaketInternet;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PeningkatanKecepatan extends Model
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "peningkatan_kecepatan";
    protected $primaryKey ="id";
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'kecepatan_sekarang',
        'kecepatan_baru',
        'status',
        'tanggal_permintaan',
        'keterangan',
    ];

    public function pelanggan()
    {
        return $this->belongsTo(Pelanggan::class, "id_pelanggan");
    }
    public function paketinternet()
    {
        return $this->belongsTo(PaketInternet::class, "id_paket_internet");
    }
}
