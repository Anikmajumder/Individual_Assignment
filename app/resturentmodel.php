<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class resturentmodel extends Model
{
    protected $primaryKey = 'id';
    public $timestamps = false;
    protected $table = 'restaurant';
}
