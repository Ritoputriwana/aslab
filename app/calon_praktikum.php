<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class calon_praktikum extends Model
{
    protected $table = 'calon_praktikum';
    protected $fillable = ['nama_calprak', 'id_reg', 'id_prak'];

    public function mahasiswa()
    {
    	return $this->hasMany('App\mahasiswa', 'id_calprak');
    }
}
