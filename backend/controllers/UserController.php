<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/luxewatches/backend/database/DB.php';

class UserController{
    private $db;

    public function __construct() {
        $this->db = new DB();
    }

    public function login(){
        $email = $_POST['email'];
        $password = $_POST['password'];

        $result = $this->db->query("SELECT * FROM users WHERE email = ? AND password = ? ", [$email, $password]);
        
        if($result && count($result) > 0){
            session_start();
            $_SESSION['user'] = $result[0];

            header("Location: /luxewatches/pages/baza.php");
        }else{
            $prevUrl = $_SERVER['HTTP_REFERER'];
            header("Location: $prevUrl" . "?error=".urldecode("Te dhenat gabim!"));
        }
    }
}