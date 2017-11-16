<?php

namespace Shop;

use Illuminate\Database\Eloquent\Model;

class OrderDetail extends Model
{
    public function product()
    {
        $this->belongsTo('Shop\Product', 'product_id', 'id');
    }

    public function order()
    {
        $this->belongsTo('Shop\Order', 'order_id', 'id');
    }
}
