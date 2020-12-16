<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Position extends Model
{
    public $incrementing = false;
    protected $fillable = ['id', 'nama'];

    public function component()
    {
        return $this->hasMany('App\Component', 'id_posisi');
    }

    public function downtime()
    {
        return $this->hasMany('App\Downtime', 'id_posisi');
    }
}
