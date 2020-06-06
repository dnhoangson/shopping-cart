<?php

namespace App;

class Cart {

    public $items;
    public $totalQuantity = 0;
    public $totalPrice = 0;

    public function __construct($oldCart) 
    {
        if ($oldCart) 
        {
            $this->items = $oldCart->items;
            $this->totalPrice = $oldCart->totalPrice;
            $this->totalQuantity = $oldCart->totalQuantity;
        }
    }
    
    public function add($item, $id)
    {
        $storedItem = ['qty' => 0, 'price' => $item->price, 'item' => $item];
        if ($this->items)
        {
            if(array_key_exists($id, $this->items))
            {
                $storedItem = $this->items[$id];
            }
        }
        $storedItem['qty']++;
        $storedItem['price'] = $item->price * $storedItem['qty'];
        $this->items[$id] = $storedItem;
        $this->totalQuantity++;
        $this->totalPrice += $item->price;
    }

}
