<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class fotoSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        DB::table('data_foto')->insert([
            [
            'nama_foto'=>'gambar laut',
            'gambar'=>'asasaa',
            'lokasi'=>'Purwakarta',
            ]
        ]);
    }
}
