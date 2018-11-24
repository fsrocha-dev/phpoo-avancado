<?php

$container['conn'] = function($c){
  return new \Source\Conn($c['dsn'], $c['user'], $c['pass']);
};

$container['product'] = function($conn){
  return new \Source\Product($conn['conn']);
};
