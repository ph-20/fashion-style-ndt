<?php

namespace Shop;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function Product()
    {
        $this->hasMany('Shop\Product', 'category_id', 'id');
    }
}
