<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class DetailElfGambar extends Model
{
  protected $table = 'detail_elf_gambar';
  protected $fillable = [
    'detail_elf_id',
    'path',
  ];
  public function detailElf()
  {
    return $this->belongsTo(DetailElf::class);
  }
}
