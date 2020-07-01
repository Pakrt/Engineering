<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Downtime extends Model
{
    protected $fillable = ['id_posisi', 'durasi', 'tanggal', 'keterangan', 'jam', 'user'];
}
