<?php

use Illuminate\Database\Seeder;

class regulerseeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        App\reguler::insert([
        	['nama_reg' => 'Sistem Terdistribusi dan Keamanan'],
        	['nama_reg' => 'Pemrograman Web'],
        	['nama_reg' => 'Pemrograman Mobile'],
        	['nama_reg' => 'Basis Data'],
        	['nama_reg' => 'Pemrograman Multimedia dan Game']
        ]);
    }
}
