<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = ['id_komponen', 'tanggal', 'keterangan', 'user'];

    public function component()
    {
        return $this->belongsTo('App\Component', 'id_komponen', 'id_komponen');
    }

}
