<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuteLokasi extends Model
{
    use HasFactory;
    protected $table = 'rute_lokasi';
    protected $fillable = [
        'nama_tempat',
    ];

    public function jadwalKeberangkatan()
    {
        return $this->hasMany(JadwalKeberangkatan::class, 'id_rute');
    }
    public function jadwalKedatangan()
    {
        return $this->hasMany(JadwalKedatangan::class, 'id_rute');
    }
    public function detailElf()
    {
        return $this->belongsToMany(DetailElf::class, 'detail_elf_rute_lokasi');
    }
}
