<?php

namespace App;



class Cart 
{
    public $items = [];
    public $totalQty ;
    public $totalPrice;

    public function __Construct($cart = null) {
        if($cart) {
            $this->items = $cart->items;
            $this->totalQty = $cart->totalQty;
            $this->totalPrice = $cart->totalPrice;
        } else {
            $this->items = [];
            $this->totalQty = 0;
            $this->totalPrice = 0;
        }
    }

    public function add($dish) {
        
        $item = [
            'title' => $dish->title,
            'price' => $dish->price,
            'qty' => 0,
            'image' => $dish->image,
        ];

        if( !array_key_exists($dish->id, $this->items)) {
            $this->items[$dish->id] = $item ;
            $this->totalQty +=1;
            $this->totalPrice += $dish->price; 
        } else {
            $this->totalQty +=1 ;
            $this->totalPrice += $dish->price; 
        }

        $this->items[$dish->id]['qty']  += 1 ;
    }
}
