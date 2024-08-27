<?php

namespace App\Models;


use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class DetailElf extends Model
{
  use HasFactory;
  protected $table = 'detail_elf';

  protected $fillable = [
    'nama_mobil',
    'plat_nomor',
  ];

  public function ruteLokasi()
  {
    return $this->belongsToMany(RuteLokasi::class, 'detail_elf_rute_lokasi', 'detail_elf_id', 'rute_lokasi_id');
  }


  public function gambar()
  {
    return $this->hasMany(DetailElfGambar::class);
  }
}
