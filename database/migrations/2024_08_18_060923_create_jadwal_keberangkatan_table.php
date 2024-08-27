<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('jadwal_keberangkatan', function (Blueprint $table) {
            $table->id();
            $table->foreignId('id_rute')->constrained('rute_lokasi')->onDelete('cascade');
            $table->time('jam_berangkat');
            $table->timestamps();
        });
    }

    public function down(): void
    {
        Schema::dropIfExists('jadwal_keberangkatan');
    }
};
