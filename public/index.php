<?php
require_once "../vendor/autoload.php";

$db = Container::getConn();

$product = Container::getProduct();

$list = $product->list();

var_dump($list);