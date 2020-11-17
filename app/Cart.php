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
            'id'    =>  $dish->id,
            'title' => $dish->title,
            'price' => $dish->Price,
            'qty' => 0,
            'image' => $dish->image,
        ];

        if( !array_key_exists($dish->id, $this->items)) {
            $this->items[$dish->id] = $item ;
            $this->totalQty +=1;
            $this->totalPrice += $dish->Price; 
        } else {
            $this->totalQty +=1 ;
            $this->totalPrice += $dish->Price; 
        }

        $this->items[$dish->id]['qty']  += 1 ;
    }
    public function remove($id) {

        if( array_key_exists($id, $this->items)) {
            $this->totalQty -= $this->items[$id]['qty'];
            $this->totalPrice -= $this->items[$id]['qty'] * $this->items[$id]['price'];
            unset($this->items[$id]);

        }

    }
    public function updateQty($id, $qty) {
        
        //reset qty and price in the cart ,
        $this->totalQty -= $this->items[$id]['qty'] ;
        $this->totalPrice -= $this->items[$id]['price'] * $this->items[$id]['qty']   ;
        // add the item with new qty
        $this->items[$id]['qty'] = $qty;

        // total price and total qty in cart
        $this->totalQty += $qty ;
        $this->totalPrice += $this->items[$id]['price'] * $qty   ;

    }

}
