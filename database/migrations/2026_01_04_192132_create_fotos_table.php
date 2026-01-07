<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Jalankan migrations untuk membuat tabel data_foto
     */
    public function up(): void
    {
        Schema::create('data_foto', function (Blueprint $table) {
            $table->id('id_foto'); // Primary key auto increment
            $table->string('nama_foto', 150); // Nama foto maksimal 150 karakter
            $table->string('gambar', 255); // Path gambar maksimal 255 karakter
            $table->text('lokasi'); // Lokasi pengambilan foto
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse migrations - hapus tabel data_foto
     */
    public function down(): void
    {
        Schema::dropIfExists('data_foto');
    }
};
