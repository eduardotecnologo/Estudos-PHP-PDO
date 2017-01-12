<?php

use Pimple\Container;

$container = new Container();

$container['dsn'] = "mysql:host=localhost;dbname=teste_PDO";
$container['user'] = "root";
$container['pass'] = "root";
