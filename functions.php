<?php
session_start();
$userId = $_SESSION["userid"] ?? 0;
//Require Database
require('database/DBcontrolar.php');

//Require Product Fetch File
require('database/product.php');

//Require cart File
require('database/cart.php');

//Db Controlers Object
$db = new DBcontrolar();

//Create An Object For Product File
$product = new product($db);

//get Product Data
$product->getData();

//call For The Get All Info
$getData = $product->getData();

//cart Object Create
$cart = new cart($db);
/*$arr = array(
    "user_id" => $userId,
    "item_id" => 1
    );
$cart->insertintocart($arr);*/