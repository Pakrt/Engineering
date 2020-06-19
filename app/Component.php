<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Component extends Model
{
    // public $incrementing = false;
    // protected $keyType = 'string';
    protected $fillable = ['id_komponen', 'komponen', 'id_posisi'];

    public function position()
    {
        return $this->belongsTo('App\Position', 'id_posisi');
    }
}
