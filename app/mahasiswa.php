<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class mahasiswa extends Model
{
    protected $table = 'mahasiswa';
    protected $fillable = ['nim', 'nama', 'alamat', 'no_hp', 'email'];

    public function calon_praktikum()
    {
    	return $this->belongsTo('App\calon_praktikum', 'id_calprak');
    }
}
