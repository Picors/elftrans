<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesanPelanggan extends Model
{
    use HasFactory;
    protected $table = 'pesan_pelanggan';

    protected $fillable = [
        'nama',
        'email',
        'subjek',
        'pesan',
    ];
}
