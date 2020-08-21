<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Crew extends Model
{
    protected $fillable =
    [
        'nama', 'alamat', 'tanggal_lahir', 'jenis_kelamin', 'kontak', 'avatar', 'scope', 'user_id'
    ];

    public function user()
    {
        return $this->belongsTo('App\User');
    }

    public function getAvatar()
    {
        if(!$this->avatar){
            return asset('images/nouser.jpg');
        }
        return asset('images/'. $this->avatar);
    }
}
