<?php
// require_once './config/dbconfig.php';
require_once './interfaces/IConn.php';
require_once './interfaces/IProduct.php';
require_once './Conn.php';
require_once './Product.php';
require_once './ServiceProduct.php';

$db = new Conn("localhost","test_pdo","postgres","root");
$product = new Product;
$service = new ServiceProduct($db, $product);

print_r($service->list());