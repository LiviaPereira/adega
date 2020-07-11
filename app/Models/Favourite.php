<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Favourite extends Model
{
    public $timestamps = false;

    function users(){

        return $this->belongsToMany('App\User');

}
}

