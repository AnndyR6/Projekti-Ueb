<?php

class ProductController
{
    private $db;

    public function __construct() {
        $this->db = new DB();
    }

    public function get(){
        return $this->db->query("SELECT * FROM products");
    }

    public function save(){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];

        $this->db->insert('products', ['name' => $name, 'price' => $price, 'description' => $description]);
    }

    public function edit($id){
        $name = $_POST['name'];
        $price = $_POST['price'];
        $description = $_POST['description'];

        $this->db->edit("products", "email = $id", [ "name" => $name, "price" => $price, "description" => $description] );
    }
}