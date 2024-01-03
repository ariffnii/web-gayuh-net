<?php

namespace App\Models;

use App\Models\User;
use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Operator extends Model
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;

    protected $table = "operator";
    protected $primaryKey ="id";
    protected $guarded = [
        'id'
    ];
    protected $fillable = [
        'nama_depan',
        'nama_depan',
        'alamat',
        'tanggal_lahir',
        'telepon',
        'nip',
        'jenis_kelamin',
    ];

    public function user()
    {
        return $this->belongsTo(User::class, "id_users");
    }
}
