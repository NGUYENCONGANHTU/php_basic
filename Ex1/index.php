<?php
require_once './Product.php' ;
require_once './CartItem.php' ;
require_once './Cart.php' ;

echo "<pre>";

//Tạp sản phẩm
$product1 = new Product (1,"Bột giặt", 10000);
$product2 = new Product (2,"Bột Mì Chính", 10000);
print_r($product1);
print_r($product2);


// Tạo giỏ hàng
$cart = new Cart();
$cart->addProduct($product1, 2);
$cart->addProduct($product1, 2);
$cart->addProduct($product2, 2);

print_r($cart);

//Hiển thị giỏ hàng
$cart->displayCart();
?>