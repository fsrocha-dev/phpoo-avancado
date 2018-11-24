<?php

use Pimple\Container;

$container = new Container();

$container['dsn'] = "mysql:host=localhost;dbname=php";
$container['user'] = "root";
$container['pass'] = "";