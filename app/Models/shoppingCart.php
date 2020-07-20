<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class ShoppingCart extends Model
{

    protected $table = "shopping_carts";


    public function orders(){
        return $this->belonsTo('App\Order');
    }
}
