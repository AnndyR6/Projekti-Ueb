<?php


require_once $_SERVER['DOCUMENT_ROOT'] . '/luxewatches/backend/controllers/UserController.php';


$userController = new UserController();

$userController->login();