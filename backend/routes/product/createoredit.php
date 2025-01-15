<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/luxewatches/backend/controllers/ProductController.php';

$productController = new ProductController();

if(isset($_GET['id']) && $_GET['id']){
    $productController->edit($_GET['id']);
}else{
    $productController->save();
}

$prevUrl = $_SERVER['HTTP_REFERER'];
header("Location: $prevUrl" . "?sucess=".urldecode("Aksioni u krye me sukses!"));
