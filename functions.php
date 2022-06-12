<?php
    
//require mysql connection
require('database/DBController.php');

//require product.php
require('database/product.php');

// require Cart .php
require ('database/Cart.php');


//DBController object
$db = new DBController();

//product object
$product = new Product($db);
$product_shuffle = $product->getData();

// Cart object
$Cart = new Cart($db );

?>