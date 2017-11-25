<?php

namespace Shop;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public function order()
    {
        return $this->belongsTo('Shop\Order', 'order_id', 'id');
    }

    public function product()
    {
        return $this->belongsTo('Shop\Product', 'product_id', 'id');
    }
}
