<?php

namespace App\Models;

use App\Models\User;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Relations\HasMany;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Pelanggan extends Model
{
    use HasApiTokens, HasFactory, Notifiable;
    use SearchableTrait;

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
    ];
    protected $searchable = [
        'nama_depan',
        'nama_belakang',
        'alamat',
        'tanggal_lahir',
        'telepon',
        'jenis_kelamin',
    ];

    public function user(){
        return $this->belongsTo(User::class, "id_users");
    }
    public function pengaduan(): HasMany
    {
        return $this->hasMany(Pengaduan::class, "id_pelanggan");
    }
    public function langganan(): HasOne{
        return $this->hasOne(Langganan::class, "id_pelanggan");
    }
    public function transaksi(): HasOne{
        return $this->hasOne(Transaksi::class, "id_pelanggan");
    }
    public function peningkatan_kecepatan(): HasOne{
        return $this->hasOne(PeningkatanKecepatan::class, "id_pelanggan");
    }
    public function detail_pemasangan(): HasOne{
        return $this->hasOne(DetailPemasangan::class, "id_pelanggan");
    }
}
