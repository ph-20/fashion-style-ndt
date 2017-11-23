<?php

namespace Shop;

use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class User extends Authenticatable
{
    use Notifiable;

    public function products()
    {
       return $this->hasMany('Shop\Product', 'user_id', 'id');
    }
}
