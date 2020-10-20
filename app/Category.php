<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['kode', 'nama', 'keterangan', 'spare'];

    public function sparepart ()
    {
        return $this->hasMany('App/Sparepart');
    }
}
