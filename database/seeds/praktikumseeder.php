<?php

use Illuminate\Database\Seeder;

class praktikumseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\praktikum::insert([
        	['nama_praktikum' => 'Praktikum Sistem Terdistribusi dan Keamanan'],
        	['nama_praktikum' => 'Praktikum Pemrograman Web'],
        	['nama_praktikum' => 'Praktikum Pemrograman Mobile'],
        	['nama_praktikum' => 'Praktikum Basis Data'],
        	['nama_praktikum' => 'Praktikum Pemrograman Multimedia dan Game']
        ]);
    }
}
