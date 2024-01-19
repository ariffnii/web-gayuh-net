<?php

namespace App\Models;

use App\Models\DetailPemasangan;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class PaketInternet extends Model
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;
    use SearchableTrait;

    protected $table = "paket_internet";
    protected $primaryKey ="id";
    protected $guarded = ['id'];
    protected $searchable = [
        'nama_paket',
        'kecepatan_download',
        'kecepatan_upload',
        'biaya_pasang',
        'harga',
        'deskripsi',
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
        return $this->hasOne(Langganan::class, "id_paket_internet");
    }
    public function peningkatankecepatan(): HasOne
    {
        return $this->hasOne(PeningkatanKecepatan::class, "id_paket_internet");
    }
    public function detailpemasangan(): HasOne
    {
        return $this->hasOne(DetailPemasangan::class, "id_paket_internet");
    }
}
