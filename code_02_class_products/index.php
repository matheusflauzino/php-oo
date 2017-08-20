<?php

require_once 'Product.php';

$db = new \PDO("mysql:host=localhost;dbname=test_oo", "root", "root"); //conexão com pdo

$product = new Product($db);

$list = $product->list();

echo '<pre>';
var_dump($list);
echo '</pre>';