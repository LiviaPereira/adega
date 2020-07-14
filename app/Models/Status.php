<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Status extends Model
{

    public $table="status";

    public function orders(){
        return $this->belongsTo('App\Order');
    }
}
