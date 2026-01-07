<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Pengguna extends Model
{
    // Nama tabel di database
    protected $table = 'pengguna';

    // Primary key tabel
    protected $primaryKey = 'id_pengguna';

    // Kolom yang boleh diisi
    protected $fillable = [
        'nama_lengkap',
        'email',
        'password'
    ];

    protected $hidden = [
        'password'
    ];

    public $timestamps = true;
}
