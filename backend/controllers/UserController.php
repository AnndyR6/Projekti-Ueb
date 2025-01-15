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

    public function register(){
        $email = $_POST['email'];
        $password = $_POST['password'];
        $first_name = $_POST['first_name'];
        $last_name = $_POST['last_name'];

        $exists = $this->db->exists("users", " email = ? ", [$email]);
        if($exists){
            $prevUrl = $_SERVER['HTTP_REFERER'];
            header("Location: $prevUrl" . "?error=".urldecode("Emaili ekziston!"));
        }else{
            $insertId = $this->db->insert('users', ['email' => $email, 'password' => $password, 'first_name' => $first_name, 'last_name' => $last_name]);
            $result = $this->db->query("SELECT * FROM users WHERE id = ?", [$insertId]);

            session_start();
            $_SESSION['user'] = $result[0];

            header("Location: /luxewatches/pages/baza.php");
        }
    }

    public function logout(){
        session_start();
        $_SESSION['user'] = null;

        $prevUrl = $_SERVER['HTTP_REFERER'];
        header("Location: $prevUrl");
    }
}