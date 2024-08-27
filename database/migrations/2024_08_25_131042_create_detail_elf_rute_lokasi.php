
<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    public function up(): void
    {
        Schema::create('detail_elf_rute_lokasi', function (Blueprint $table) {
            $table->id();
            $table->foreignId('detail_elf_id')->constrained('detail_elf')->onDelete('cascade');
            $table->foreignId('rute_lokasi_id')->constrained('rute_lokasi')->onDelete('cascade');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('detail_elf_rute_lokasi');
    }
};
