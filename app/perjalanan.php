<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perjalanan extends Model
{
    protected $table = 'perjalanans';
    protected $fillable = ['id_user','tgl_perjalanan','jam','lokasi','suhu_tubuh'
    ]; 

    protected $primaryKey  = 'id';

    public function user()
    {
        return $this->belongsTo('App\User');
    }
}
