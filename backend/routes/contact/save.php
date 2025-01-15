<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/luxewatches/backend/controllers/ContactController.php';

$userController = new ContactController();
$userController->save();