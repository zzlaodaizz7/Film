<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Nation extends Model
{
    //
    protected $table = 'Nations';
    protected $fillable = ['id','name'];
}
