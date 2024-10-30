<?php
 class CartItem {
    public function __construct( private Product $product,private $quantity=1)
    {
        
    }
    public function getProduct(){
        return $this->product;
    }
    public function setQuantity($quantity){
         $this->quantity= $quantity;
    }
    public function getQuantity(){
        return $this->quantity;
    }

    public function getTotalPrice(){
        return $this->product->getPrice() * $this->quantity;
 }
 }
?>