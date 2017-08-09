<?php

use Illuminate\Database\Seeder;

class matakuliah extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\matakuliah::insert([
        	['nama_matkul' => 'Praktikum Sistem Terdistribusi dan Keamanan'],
        	['nama_matkul' => 'Praktikum Pemrograman Web'],
        	['nama_matkul' => 'Praktikum Pemrograman Mobile'],
        	['nama_matkul' => 'Praktikum Basis Data'],
        	['nama_matkul' => 'Praktikum Pemrograman Multimedia dan Game'],
        	['nama_matkul' => 'Sistem Terdistribusi dan Keamanan'],
        	['nama_matkul' => 'Pemrograman Web'],
        	['nama_matkul' => 'Pemrograman Mobile'],
        	['nama_matkul' => 'Basis Data'],
        	['nama_matkul' => 'Pemrograman Multimedia dan Game']
        ]);
    }
}
