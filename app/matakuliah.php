<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class matakuliah extends Model
{
    protected $table = 'matakuliah';
    protected $fillable = ['id_matkul', 'nama_matkul'];

    public function nilai()
    {
    	return $this->hasMany('App\nilai', 'id_matkul');
    }
}
