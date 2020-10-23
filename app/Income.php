<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Income extends Model
{
    protected $fillable = ['sparepart_id', 'jumlah', 'tanggal', 'user_id', 'keterangan', 'kode', 'spares'];

    public function sparepart()
    {
        return $this->belongsTo('App\Sparepart');
    }

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
