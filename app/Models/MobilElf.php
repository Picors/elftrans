<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class MobilElf extends Model
{
  use HasFactory;
  protected $table = 'mobil_elf';

  protected $fillable = [
    'nama',
    'id_detailelf',
    'nama_sopir',
    'nohp_sopir',
    'id_jadwal_keberangkatan',
    'id_jadwal_kedatangan',
    'harga',
    'status_keberangkatan'
  ];

  // Relasi dengan DetailElf
  public function detailElf()
  {
    return $this->belongsTo(DetailElf::class, 'id_detailelf');
  }

  // Relasi dengan JadwalKeberangkatan
  public function jadwalKeberangkatan()
  {
    return $this->belongsTo(JadwalKeberangkatan::class, 'id_jadwal_keberangkatan');
  }

  // Relasi dengan JadwalKedatangan
  public function jadwalKedatangan()
  {
    return $this->belongsTo(JadwalKedatangan::class, 'id_jadwal_kedatangan');
  }
}
