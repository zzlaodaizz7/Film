<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Film extends Model
{
    //
    protected $table = 'films';
    protected $fillable = ['name','nations_id','thumbnail','categorys_id','year','link','trailer','contentfilm','cast','episodes','language','status'];
}
