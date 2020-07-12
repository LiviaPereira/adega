<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Delivery extends Model
{
    public $timestamps = false;

    protected $fillable = [
        'address', 'number', 'complement', 'zip_code', 'district', 'city'
    ];

    public function users(){
        return $this->belongsTo('App\User');
    }
}
