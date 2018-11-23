<?php
require_once "../vendor/autoload.php";

use Pimple\Container;

$container = new Container();

$container['date'] = function(){
  return new \DateTime;
};

var_dump($container['date']);

// $db = Container::getConn();

// $product = Container::getProduct();

// $list = $product->list();

// var_dump($list);