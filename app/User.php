<?php

namespace Shop;

use Illuminate\Database\Eloquent\Model;

class User extends Model
{
    public function products()
    {
       return $this->hasMany('Shop\Product', 'user_id', 'id');
    }
}
