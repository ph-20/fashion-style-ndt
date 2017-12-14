<?php

namespace Shop;

class Cart
{
    public $items = null;
    public $totalQty = 0;
    public $totalPrice = 0;

    public function __construct($oldCart)
    {
        if ($oldCart) {
            $this->items = $oldCart->items;
            $this->totalQty = $oldCart->totalQty;
            $this->totalPrice = $oldCart->totalPrice;
        }
    }

    //  Thêm vào giỏ hàng
    public function add($item, $id)
    {
        if ($item->discount > 0) {
            $price = $item->discount;
        } else {
            $price = $item->price;
        }
        $store = ['qty' => 0, 'price' => $price, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $store = $this->items[$id];
            }
        }
        $store['qty']++;
        $store['price'] = $price * $store['qty'];
        $this->items[$id] = $store;
        $this->totalQty = $this->totalQty + $store['qty'];
        $this->totalPrice = $this->totalPrice + $store['price'];
    }

    //  Cập nhật giỏ hàng
    public function update($item, $id, $qty)
    {
        if ($item->discount > 0) {
            $price = $item->discount;
        } else {
            $price = $item->price;
        }

        $store = ['qty' => 0, 'price' => $price, 'item' => $item];
        if ($this->items) {
            if (array_key_exists($id, $this->items)) {
                $store = $this->items[$id];
            }
        }
        $store['qty'] = $qty;
        $store['price'] = $price * $store['qty'];
        $this->items[$id] = $store;

        $this->totalQty = $this->totalQty + ($store['qty_new'] - $store['qty_old']);
        $this->totalPrice = $this->totalPrice + $store['price'];
    }

    //  Xóa 1 sản phẩm
    public function reduceByOne($id)
    {
        if ($this->items[$id]['item']['discount'] > 0) {
            $price = $this->items[$id]['item']['discount'];
        } else {
            $price = $this->items[$id]['item']['price'];
        }
        $sumPrice = $this->items[$id]['qty'] * $price;
        $this->totalQty = $this->items[$id]['qty'];
        $this->totalPrice -= $sumPrice;
        unset($this->items[$id]);
    }

    //  Xóa nhiều sản phẩm
    public function removeItem($id)
    {
        $this->totalQty -= $this->items[$id]['qty'];
        $this->totalPrice -= $this->items[$id]['price'];
        unset($this->items[$id]);
    }
}
