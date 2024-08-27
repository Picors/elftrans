<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKedatangan extends Model
{
  use HasFactory;
  protected $table = 'jadwal_kedatangan';

  protected $fillable = [
    'id_rute',
    'jam_kedatangan',
  ];

  public function ruteLokasi()
  {
    return $this->belongsTo(RuteLokasi::class, 'id_rute');
  }
}
