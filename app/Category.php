<?php

namespace Shop;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    //
    public function products()
    {
      return $this->hasMany('Shop\Product', 'category_id', 'id');
    }
}
