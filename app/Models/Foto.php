<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Foto extends Model
{
    // Nama tabel di database
    protected $table = 'data_foto';

    // Primary key tabel
    protected $primaryKey = 'id_foto';

    // Kolom yang boleh diisi
    protected $fillable = [
        'nama_foto',
        'gambar',
        'lokasi'
    ];

    // Aktifkan timestamps
    public $timestamps = true;
}
