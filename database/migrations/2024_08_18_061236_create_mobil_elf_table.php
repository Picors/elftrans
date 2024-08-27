<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('mobil_elf', function (Blueprint $table) {
            $table->id();
            $table->string('nama');
            $table->foreignId('id_detailelf')->constrained('detail_elf')->onDelete('cascade');
            $table->string('nama_sopir');
            $table->string('nohp_sopir');
            $table->foreignId('id_jadwal_keberangkatan')->constrained('jadwal_keberangkatan')->onDelete('cascade');
            $table->foreignId('id_jadwal_kedatangan')->constrained('jadwal_kedatangan')->onDelete('cascade');
            $table->decimal('harga', 8, 2);
            $table->enum('status_keberangkatan', ['berangkat', 'belum berangkat', 'selesai'])->default('belum berangkat');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('mobil_elf');
    }
};
