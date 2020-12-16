<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class History extends Model
{
    protected $fillable = ['id_komponen','user_id', 'tanggal', 'keterangan'];

    public function component()
    {
        return $this->belongsTo('App\Component', 'id_komponen', 'id_komponen');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }

}
