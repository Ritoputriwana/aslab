<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class nilai extends Model
{
    protected $table = 'nilai';
    protected $fillable = ['nama_matkul'];

    public function mahasiswa()
    {
    	return $this->belongsTo('App\mahasiswa', 'nim', 'nim');
    }

    public function matakuliah()
    {
    	return $this->belongsTo('App\matakuliah', 'id_matkul');
    }
}
