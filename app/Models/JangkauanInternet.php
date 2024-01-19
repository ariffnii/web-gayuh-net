<?php

namespace App\Models;

use Laravel\Sanctum\HasApiTokens;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Nicolaslopezj\Searchable\SearchableTrait;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class JangkauanInternet extends Model
{
    use HasFactory;
    use HasApiTokens, HasFactory, Notifiable;
    use SearchableTrait;

    protected $table = "jangkauan_internet";
    protected $primaryKey ="id";
    protected $guarded = ['id'];
    protected $searchable = [
        'columns' =>[
            'nama_kelurahan',
            'ketersediaan_internet'
        ]
    ];
    protected $fillable = [
        'nama_kelurahan',
        'ketersediaan_internet',
    ];
}
