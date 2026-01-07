<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

return new class extends Migration {
    /**
     * Jalankan migrations untuk membuat tabel pengguna
     */
    public function up(): void
    {
        Schema::create('pengguna', function (Blueprint $table) {
            $table->id('id_pengguna'); // Primary key auto increment
            $table->string('nama_lengkap', 150); // Nama lengkap maksimal 150 karakter
            $table->string('email')->unique(); // Email unik untuk setiap pengguna
            $table->string('password'); // Password yang sudah di-hash
            $table->timestamps(); // created_at dan updated_at
        });
    }

    /**
     * Reverse migrations - hapus tabel pengguna
     */
    public function down(): void
    {
        Schema::dropIfExists('pengguna');
    }
};
