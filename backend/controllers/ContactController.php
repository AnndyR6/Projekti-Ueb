<?php

require_once $_SERVER['DOCUMENT_ROOT'] . '/luxewatches/backend/database/DB.php';

class ContactController{
    private $db;

    public function __construct() {
        $this->db = new DB();
    }

    public function save(){
        $email = $_POST['email'];
        $message = $_POST['message'];

        $insertId = $this->db->insert('submissions', ['email' => $email, 'message' => $message]);

        $prevUrl = $_SERVER['HTTP_REFERER'];
        header("Location: $prevUrl" . "?success=".urldecode("Faleminderit qe na kontaktuat"));
    }

    public function get(){
        return $this->db->query("SELECT * FROM submissions");
    }
}