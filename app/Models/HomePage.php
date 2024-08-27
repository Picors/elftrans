<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class HomePage extends Model
{
  use HasFactory;

  protected $table = 'home_page';

  protected $fillable = [
    'nama_web',
    'logo',
    'icon',
    'logo_nav',
    'tentang_1',
    'gambar_tentang',
    'tentang_2',
    'teks_footer',
    'no_tlp',
    'alamat',
    'email',
    'link_google_maps',
    'link_facebook',
    'link_instagram',
    'link_whatsapp',
    'link_tiktok'
  ];
}
