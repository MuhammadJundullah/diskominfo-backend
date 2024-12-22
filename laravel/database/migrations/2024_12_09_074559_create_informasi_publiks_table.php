<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration
{
    /**
     * Run the migrations.
     */
    public function up(): void
    {
        Schema::create('informasi_publiks', function (Blueprint $table) {
            $table->id();
            $table->string('informasi')->nullable();
            $table->string('judul')->nullable();
            $table->string('dibuat')->nullable();
            $table->string('tanggal_dokumen')->nullable();
            $table->string('ukuran')->nullable();
            $table->string('url')->nullable();
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     */
    public function down(): void
    {
        Schema::dropIfExists('informasi_publiks');
    }
};