<?php

namespace App;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Illuminate\Database\Eloquent\SoftDeletes;

class User extends Authenticatable
{

    function favourites(){

        return $this->belongsToMany('App\Models\Product', 'favourites', 'users_id', 'products_id');

    }

    function deliveries(){

        return $this->hasOne('App\Delivery');
    }

    use Notifiable;

    use SoftDeletes;

    //informando ao laravel que esse model refere-se 
    //a uma tabela sem timestamps
    //public $timestamps = false;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name', 'surname', 'cpf', 'birth', 'cellphone', 'phone', 'email', 'password', 'news',
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password', 'rememberToken',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
    ];
}
