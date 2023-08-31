<?php
require_once $_SERVER['DOCUMENT_ROOT'] . '/src/DB.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/src/Controller/ProductController.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/src/Model/Product.php';
require_once $_SERVER['DOCUMENT_ROOT'] . '/src/View/form.php';



$controller = new ProductController();
$controller->store();
?>

