<?php
require __DIR__ . '/../vendor/autoload.php';
use Controller\Itemcontroller;
$ItemController = new Controller\ItemController();
$ItemController->index();
?>