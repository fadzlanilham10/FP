<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use App\Models\Post;
use Illuminate\Http\Request;
use Codedge\Fpdf\Fpdf\Fpdf;
use App\User;

class Gambar extends Model
{
    protected $table = "pegawai";
    protected $fillable = ['nama', 'nip', 'alamat', 'user_id'];

    // public function user()
    // {
    //     return $this->belongsTo(User::class, 'user_id');
    // }
}


