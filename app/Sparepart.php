<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Sparepart extends Model
{
    protected $fillable = ['category_id', 'nama', 'jumlah', 'keterangan', 'unit_id', 'minimum', 'gambar', 'spesifikasi', 'spare'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }

    public function outcome()
    {
        return $this->hasMany('App\Outcome');
    }

    public function income()
    {
        return $this->hasMany('App\Income');
    }

    public function unit()
    {
        return $this->belongsTo('App\Unit');
    }
}
