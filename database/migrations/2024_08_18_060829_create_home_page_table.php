<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('home_page', function (Blueprint $table) {
            $table->id();
            $table->string('nama_web');
            $table->string('logo');
            $table->string('icon');
            $table->string('logo_nav');
            $table->text('tentang_1');
            $table->string('gambar_tentang');
            $table->text('tentang_2');
            $table->text('teks_footer');
            $table->string('no_tlp');
            $table->text('alamat');
            $table->string('email');
            $table->text('link_google_maps');
            $table->text('link_facebook')->nullable();
            $table->text('link_instagram')->nullable();
            $table->text('link_whatsapp')->nullable();
            $table->text('link_tiktok')->nullable();
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('home_page');
    }
};
