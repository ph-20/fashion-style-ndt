<?php

namespace Shop;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    //
    public function user()
    {
        return $this->belongsTo('Shop\User', 'user_id', 'id');
    }

    public function category()
    {
        return $this->belongsTo('Shop\Category', 'category_id', 'id');
    }

    public function orderDetails()
    {
        return $this->hasMany('Shop\OrderDetail', 'product_id', 'id');
    }
}
