<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class praktikum extends Model
{
    protected $table = 'praktikum';
    protected $fillable = ['nama_praktikum'];

    public function calon_praktikum()
    {
    	return $this->belongsTo('App\calon_praktikum', 'id_praktikum');
    }
}
