<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class perjalanan extends Model
{
    protected $table = 'users';
    protected $fillable = ['id','nik','name','tlp','email','password','foto'
    ];
}
