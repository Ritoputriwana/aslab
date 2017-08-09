<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class reguler extends Model
{
    protected $table = 'reguler';
    protected $fillable = ['nama_reg'];

    public function calon_praktikum()
    {
    	return $this->belongsTo('App\calon_praktikum', 'id_reg');
    }
}
