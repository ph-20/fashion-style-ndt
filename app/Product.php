<?php

namespace Shop;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    public function category()
    {
        $this->belongsTo('Shop\Category', 'category_id', 'id');
    }

    public function user()
    {
        $this->belongsTo('Shop\User', 'user_id', 'id');
    }

    public function orderDetails()
    {
        $this->hasMany('Shop\OrderDetail', 'product_id', 'id');
    }
}
