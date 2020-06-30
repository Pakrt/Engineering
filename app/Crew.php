<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    protected $fillable = ['nama', 'alamat', 'jenis_kelamin', 'kontak', 'gambar', 'scope', 'user_id'];
}
