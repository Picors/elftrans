<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class JadwalKeberangkatan extends Model
{
  use HasFactory;
  protected $table = 'jadwal_keberangkatan';

  protected $fillable = [
    'id_rute',
    'jam_berangkat',
  ];

  public function ruteLokasi()
  {
    return $this->belongsTo(RuteLokasi::class, 'id_rute');
  }
}
