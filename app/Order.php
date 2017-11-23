<?php

namespace Shop;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    public function orderDetails()
    {
      return $this->hasMany('Shop\OrderDetail', 'order_id', 'id');
    }
}
