<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Gambar extends Model
{
       protected $table = "pegawai";
 
    protected $fillable = ['nip','nama','alamat','file'];
}
