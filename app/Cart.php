<?php

namespace App;


class Cart 
{
    public $items = array();
    public $totalQty = 0;
    public $totalprice = 0;

public function __construct($oldCart)
{
    if ($oldCart) {
        $this->items = $oldCart->items;
        $this->totalQty = $oldCart->totalQty;
        $this->totalprice = $oldCart->totalprice;

    }
}

public function add($item, $id) {
   $storedItem = ['qty' =>0, 'price' => $item->price, 'item' => $item ];



    if($this->items){
        if (array_key_exists($id, $this->items)){
            $storedItem = $this->items[$id];
        }

    }
    $storedItem['qty']++;
    $storedItem['price'] = (int)$item->price * (int)$storedItem['qty'];
    $this->items[$id] = $storedItem;
    $this->totalQty++;
   $this->totalprice += (int)$item->price;


        }



}
