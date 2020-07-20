<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    public function users(){
        return $this->belongsTo('App\User');
    }

    public function status(){
        return $this->belongsTo('App\Status');
    }

    public function shoppingCarts(){
        return $this->belongsTo('App\ShoppingCart');
    }

}
