<?php
require_once __DIR__ . '/vendor/autoload.php';
require_once "config.php";
require_once "service.php";

$list = $container['ServiceProduct']->list();

require_once 'list_product.php';