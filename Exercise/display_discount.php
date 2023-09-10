<?php
    $product = $_POST['product_description'];
    $list_price = $_POST['list_price'];
    $discount_percent = $_POST['discount_percent'];
   
    $price = $list_price - $list_price*$discount_percent/100;

    echo $price;
    
?>