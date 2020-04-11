<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Borrow extends Model
{
    public $timestamps = false;
    protected $fillable = [
       'comment','borrow'
    ];
    protected $table = 'restaurant';

    
}
