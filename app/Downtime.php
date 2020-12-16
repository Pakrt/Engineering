<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Downtime extends Model
{
    protected $fillable = ['id_posisi', 'durasi', 'tanggal', 'keterangan', 'jam', 'user_id'];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function position()
    {
        return $this->belongsTo('App\Position', 'id_posisi');
    }
}
