<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('detail_elf', function (Blueprint $table) {
            $table->id();
            $table->string('nama_mobil');
            $table->string('plat_nomor');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('detail_elf');
    }
};
